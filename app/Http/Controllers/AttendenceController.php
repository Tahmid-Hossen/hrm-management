<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Company;
use App\Models\Departments;
use App\Models\Designations;
use App\Models\Employee;
use App\Models\ImportLog;
use Illuminate\Http\Request;
use App\Http\Controllers\ZkTeco\TADFactory;
use Maatwebsite\Excel\Facades\Excel;

class AttendenceController extends Controller
{


    public function index(Request $request)
    {
        //return $request;
        $designations = Designations::all();
        $departments = Departments::all();
        $companies = Company::get();
        if ($request->ajax()) {
            $searchKey = $request->search['value'] ?? '';
            $company = $request->company;
            $department = $request->department;
            $designation = $request->designation;
            $date = $request->date ?? date('Y-m-d');
            $start_date=$date;
            $end_date=$date;
            $limit = $request->length;
            if ($limit < 0) $limit = 10;
            $offset = $request->start;
            // Orders
            $orderByColumn = null;
            $orderByDirection = null;


            /*$sync=$request->sync;
            if($sync=='sync'){
                $this->syncAttendanceData($date, $date);
            }*/

            // Check if the order array exists in the request and has at least one item
            if (isset($request->order) && count($request->order) > 0) {
                $firstOrderItem = $request->order[0];
                $orderByColumn = $firstOrderItem['name'] ?? null;
                $orderByDirection = $firstOrderItem['dir'] ?? null;
            }
            $query = Employee::query();
            $recordsTotal = $query->count();
            if ($searchKey) {
                $query->where(function ($query) use ($searchKey) {
                    $query->orWhere('emp_id', 'like', "%{$searchKey}%");
                    $query->orWhere('full_name', 'like', "%{$searchKey}%");
                    $query->orWhere('email', 'like', "%{$searchKey}%");
                    $query->orWhere('phone', 'like', "%{$searchKey}%");
                    $query->orWhereIn('company', function ($subquery) use ($searchKey) {
                        $subquery->select('id')->from(with(new Company())->getTable())->where('name', 'like', "%$searchKey%");
                    });
                    $query->orWhereIn('department', function ($subquery) use ($searchKey) {
                        $subquery->select('id')->from(with(new Departments())->getTable())->where('name', 'like', "%$searchKey%");
                    });
                    $query->orWhereIn('designation', function ($subquery) use ($searchKey) {
                        $subquery->select('id')->from(with(new Designations())->getTable())->where('name', 'like', "%$searchKey%");
                    });
                    $query->orWhere('gender', 'like', "%{$searchKey}%");

                });
            }
            if ($company) $query->where('company', $company);
            if ($department) $query->where('department', $department);
            if ($designation) $query->where('designation', $designation);

            // ORDERS

            switch ($orderByColumn) {
                case 'employeeID':
                    $query->orderBy('emp_id', $orderByDirection);
                    break;
                case 'name':
                    $query->orderBy('full_name', $orderByDirection);
                    break;
                case 'company':
                    $query->orderBy(Company::select('name')->whereColumn('id', 'employees.company'), $orderByDirection);
                    break;
                case 'department':
                    $query->orderBy(Departments::select('name')->whereColumn('id', 'employees.department'), $orderByDirection);
                    break;
                case 'designation':
                    $query->orderBy(Departments::select('name')->whereColumn('id', 'employees.designation'), $orderByDirection);
                    break;
                case 'phone':
                    $query->orderBy('phone', $orderByDirection);
                    break;
                case 'gender':
                    $query->orderBy('gender', $orderByDirection);
                    break;
                default:
                    $query->orderBy('id', 'asc');
                    break;
            }

            $recordsFiltered = $query->get();  // Filtered Data to count
            $query->limit($limit)->offset($offset);

            $employees = $query->get();

            $employeeData = [];
            foreach ($employees as $item) {
                $defaultProfileImage=$item->gender=='Female' ? asset('uploads/employees/profile/default-emp-female.jpg') : asset('uploads/employees/profile/default-emp-male.jpg');
                $profile_img=asset('uploads/employees/profile/' . $item->profile_photo);
                $attendance=$item->attendanceData($start_date, $end_date);
                $attendanceCount = $attendance->count();
                $clockIn=null;
                $clockOut=null;
                $late='';
                $overtime='';
                $earlyLeaving='';
                $dutySlot=[];
                $dutyStartTime='';
                $dutyThresholdTime='';
                $dutyEndTime='';

                $startTime='10:00:00';
                $thresholdTime='10:15:00';
                $endTime='18:00:00';
                if($item->dutySlot){
                    $dutySlot=$item->dutySlot;
                    if($dutySlot->dutySlotRule($date)){
                        $dutySlot=$dutySlot->dutySlotRule($date);
                    }
                    $startTime=$dutySlot->start_time;
                    $thresholdTime=$dutySlot->threshold_time;
                    $endTime=$dutySlot->end_time;
                }
                if($attendanceCount>0){
                    $sortedAttendances = $attendance->sortBy('DateTime');
                    $att=$sortedAttendances->first();
                    $clockOut = $attendanceCount == 1 ? null : $sortedAttendances->last()['DateTime'];
                    $clockIn = $att['DateTime'];


                    // Late Count
                    $clockInTime = strtotime($clockIn);
                    $dutySlotStartTime = strtotime("$date $startTime");
                    $dutySlotThresholdTime = strtotime("$date $thresholdTime");
                    if($clockInTime>$dutySlotThresholdTime) {
                        $lateCount = floor(($clockInTime - $dutySlotStartTime) / 60);
                        $hours = floor($lateCount / 60); // Calculate hours
                        $minutes = $lateCount % 60;
                        if($hours>0) $late = $hours . 'h ' .$minutes.'m';
                        else $late = $minutes.'m';
                    }
                    else{
                        //$late = "Not Late";
                    }
                    // Over Time
                    $clockOutTime = strtotime($clockOut);
                    $dutySlotEndTime = strtotime("$date $endTime");
                    if($clockOut){
                        if($clockOutTime>$dutySlotEndTime) {
                            $lateCount = round(($clockOutTime - $dutySlotEndTime) / 60);
                            $hours = floor($lateCount / 60); // Calculate hours
                            $minutes = $lateCount % 60;
                            if($hours>0) $overtime = $hours . 'h ' .$minutes.'m';
                            else $overtime = $minutes.'m';
                        }
                    }

                    // Early Leaving
                    if(time()>$dutySlotEndTime && $clockOut){
                        if($clockOutTime<$dutySlotEndTime) {
                            $lateCount = round(($dutySlotEndTime - $clockOutTime) / 60);
                            $hours = floor($lateCount / 60); // Calculate hours
                            $minutes = $lateCount % 60;
                            if($hours>0) $earlyLeaving = $hours . 'h ' .$minutes.'m';
                            else $earlyLeaving = $minutes.'m';
                        }
                    }
                }
                $employeeData[] = [
                    'id' => $item->id,
                    'emp_id' => $item->emp_id ?? '',
                    'full_name' => $item->full_name ?? '',
                    'profile_img' => $profile_img,
                    'profile_img_default' => $defaultProfileImage,
                    'email' => $item->email ?? '',
                    'phone' => $item->phone ?? '',
                    'designation' => $item->empDesignation->name ?? '',
                    'department' => $item->empDepartment->name ?? '',
                    'company' => $item->empCompany->name ?? '',
                    'biometric_id' => $item->biometric_id ?? '',
                    'attendance' => $attendance,
                    'dutySlotName' => $item->dutySlot->slot_name ?? '',
                    'dutySlot' => $dutySlot,
                    'dutyStartTime' => date('H:ia', strtotime($startTime)),
                    'dutyThresholdTime' => date('H:ia', strtotime($thresholdTime)),
                    'dutyEndTime' => date('h:ia', strtotime($endTime)),
                    'attendanceCount' => $attendanceCount,
                    'clockIn' => $clockIn,
                    'clockOut' => $clockOut,
                    'late' => $late,
                    'earlyLeaving' => $earlyLeaving,
                    'overtime' => $overtime,
                ];
            }
            $lastSync=Attendance::orderBy('sync_dtime', 'desc')->first()->sync_dtime ?? '';
            $request = [
                'status' => 1,
                'recordsTotal' => $recordsTotal,
                'recordsFiltered' => $recordsFiltered->count(),
                'data' => $employeeData,
                'lastSyncDate' => $lastSync!='' ? date('d M Y', strtotime($lastSync)) : '',
                'lastSyncTime' => $lastSync!='' ? date('H:i:s a', strtotime($lastSync)) : '',
                'orderableColumns' => $orderByColumn . $orderByDirection
            ];
            return response()->json($request);
        }

        $trashedEmployees = Employee::onlyTrashed()->get();
        return view('attendance.index', compact('companies', 'designations', 'departments', 'trashedEmployees'));
    }

    public function syncAttendanceData(Request $request)
    {
        $startDate=$request->start_date;
        $endDate=$request->end_date;
        if($startDate && $endDate){
            $tad_factory = new TADFactory(['ip' => '192.168.1.33']);
            $tad = $tad_factory->get_instance();
            $all_attendance= $tad->get_att_log();
            $filtered_att_logs = $all_attendance->filter_by_date([
                'start' => $startDate,
                'end' => $endDate
            ]);
            $machineAttendance=$this->makeJson($filtered_att_logs);
            // Fetch existing data for the date range
            $existingAttendance = Attendance::whereBetween('DateTime', ["$startDate 00:00:00", "$endDate 23:59:59"])
                ->where('is_manual', 0)
                ->get();

            // Delete existing data
            $deleted = Attendance::whereBetween('DateTime', ["$startDate 00:00:00", "$endDate 23:59:59"])
                ->where('is_manual', 0)
                ->delete();

            // Insert new data
            if (Attendance::insert($machineAttendance)) {
                return back()->with('success', "Successfully Synced");
            } else {
                // If deletion fails, revert by re-inserting existing data
                Attendance::insert($existingAttendance->toArray());
                return back()->with('error', "And Error Occurred!");
            }
        }

    }

    public function makeJson($data)
    {
        $xmlString = <<<XML
        $data
        XML;
        $xml = simplexml_load_string($xmlString);
        $xmlArray = json_decode(json_encode($xml), true);
        return $xmlArray['Row'];
    }
    public function index2(Request $request)
    {
       /* $tad_factory = new TADFactory(['ip' => '192.168.1.33']);
        $tad = $tad_factory->get_instance();
        $user_info = $tad->get_user_info();
        return $this->makeJson($user_info);*/
        return view('attendance.index');


        /*$tad_factory = new TADFactory(['ip' => '192.168.1.33']);
        $tad = $tad_factory->get_instance();
        //$user_info = $tad->get_user_info();
        //$usersData=$this->makeJson($user_info);
        $all_attendance= $tad->get_att_log();
        $filtered_att_logs = $all_attendance->filter_by_date([
            'start' => '2024-05-12',
            'end' => '2024-05-12'
        ]);
        return $this->makeJson($filtered_att_logs);*/
    }
    public function attendanceData(Request $request)
    {
        if($request->ajax()) {
            $date=$request->date;
            if($request->sync=='sync'){

                $tad_factory = new TADFactory(['ip' => '192.168.1.33']);
                $tad = $tad_factory->get_instance();
                $all_attendance= $tad->get_att_log();
                $filtered_att_logs = $all_attendance->filter_by_date([
                    'start' => $date,
                    'end' => $date
                ]);
                Attendance::where('DateTime', 'like', "{$date}%")->delete();
                Attendance::insert($this->makeJson($filtered_att_logs));
            }
            $attendanceRecords = Attendance::where('DateTime', 'like', "{$date}%")->orderBy('DateTime')->get();
            $groupedAttendance = $attendanceRecords->groupBy('PIN');
            $recordsTotal = $groupedAttendance->count();
            $groupedAttendance = $groupedAttendance->slice(0, 10);
            $recordsFiltered=$groupedAttendance;
            $attendance=[];
            foreach ($groupedAttendance as $pin => $attendances) {
                $sortedAttendances = $attendances->sortBy('DateTime');
                $att=$sortedAttendances->first();
                $id=$att->id;
                $emp=$att->employee;
                $attendanceCount = $attendances->count();
                $clockOut = $attendanceCount == 1 ? null : $sortedAttendances->last()['DateTime'];
                $clockIn = $att['DateTime'];
                $attendance[] = [
                    'id' => $attendances[0]->id,
                    'emp_id' => $emp->id ?? '',
                    'emp_name' => $emp->full_name ?? '',
                    'email' => $emp->email ?? '',
                    'phone' => $emp->phone ?? '',
                    'PIN' => $pin,
                    'attendanceCount' => $attendanceCount,
                    'clockIn' => $clockIn,
                    'clockOut' => $clockOut,
                    'late' => '',
                    'earlyLeaving' => '',
                    'overtime' => '',
                ];
            }
            $response=[
                'status'=>1,
                'recordsTotal' => $recordsTotal,
                'recordsFiltered' => $recordsFiltered->count(),
                'data'=>$attendance
            ];
            return $response;
        }

    }

    public function getAttendanceList($request)
    {
        $date="2024-05-12";
        if($request->sync=='sync'){
            $tad_factory = new TADFactory(['ip' => '192.168.1.33']);
            $tad = $tad_factory->get_instance();
            $all_attendance= $tad->get_att_log();
            $filtered_att_logs = $all_attendance->filter_by_date([
                'start' => $date,
                'end' => $date
            ]);
            return $this->makeJson($filtered_att_logs);
            Attendance::insert($this->makeJson($filtered_att_logs));
        }

        $attendance = Attendance::where('DateTime', 'like', "{$date}%")->get();
        return $attendance;
        $attendanceJsonData = [];
        foreach ($attendance as $item) {
            $sortedAttendances = $attendances->sortBy('DateTime');
            $attendanceCount = $attendances->count();
            $clockIn = $sortedAttendances->first()['DateTime'];
            $clockOut = $attendanceCount == 1 ? null : $sortedAttendances->last()['DateTime'];
            $clockInOutData[] = [
                'PIN' => $pin,
                'ClockIn' => $clockIn,
                'ClockOut' => $clockOut
            ];
        }
        $clockInOutJson = json_encode($clockInOutData, JSON_PRETTY_PRINT);


        $response=[
            'status'=>1,
            'data'=>$clockInOutData
        ];
        return $response;


        /*$attendance='[
            {"PIN":"119","DateTime":"2024-05-12 08:08:38"},
            {"PIN":"43","DateTime":"2024-05-12 08:19:20"},
            {"PIN":"43","DateTime":"2024-05-12 08:19:46"},
            {"PIN":"113","DateTime":"2024-05-12 08:42:49"},
            {"PIN":"57","DateTime":"2024-05-12 08:50:48"},
            {"PIN":"43","DateTime":"2024-05-12 08:59:35"},
            {"PIN":"63","DateTime":"2024-05-12 09:01:19"},
            {"PIN":"54","DateTime":"2024-05-12 09:03:29"},
            {"PIN":"54","DateTime":"2024-05-12 09:03:44"},
            {"PIN":"125","DateTime":"2024-05-12 09:03:51"},
            {"PIN":"125","DateTime":"2024-05-12 09:04:00"},
            {"PIN":"3682868","DateTime":"2024-05-12 09:05:58"},
            {"PIN":"68","DateTime":"2024-05-12 09:06:22"},
            {"PIN":"102","DateTime":"2024-05-12 09:14:17"},
            {"PIN":"3682905","DateTime":"2024-05-12 09:22:25"},
            {"PIN":"28","DateTime":"2024-05-12 09:29:20"},
            {"PIN":"842544693","DateTime":"2024-05-12 09:31:34"},
            {"PIN":"41","DateTime":"2024-05-12 09:38:04"},
            {"PIN":"113","DateTime":"2024-05-12 09:38:20"},
            {"PIN":"8199665","DateTime":"2024-05-12 09:39:49"},
            {"PIN":"49","DateTime":"2024-05-12 09:40:54"},
            {"PIN":"7","DateTime":"2024-05-12 09:41:37"},
            {"PIN":"7","DateTime":"2024-05-12 09:41:45"},
            {"PIN":"1","DateTime":"2024-05-12 09:45:14"},
            {"PIN":"43","DateTime":"2024-05-12 09:46:28"},
            {"PIN":"88","DateTime":"2024-05-12 09:48:40"},
            {"PIN":"842544695","DateTime":"2024-05-12 09:52:05"},
            {"PIN":"18","DateTime":"2024-05-12 09:54:09"},
            {"PIN":"14","DateTime":"2024-05-12 09:54:29"},
            {"PIN":"842544705","DateTime":"2024-05-12 09:55:59"},
            {"PIN":"842544705","DateTime":"2024-05-12 09:56:06"},
            {"PIN":"44","DateTime":"2024-05-12 09:56:32"},
            {"PIN":"20","DateTime":"2024-05-12 09:56:53"},
            {"PIN":"113","DateTime":"2024-05-12 09:57:18"},
            {"PIN":"19","DateTime":"2024-05-12 09:57:38"},
            {"PIN":"121","DateTime":"2024-05-12 09:57:44"},
            {"PIN":"842544722","DateTime":"2024-05-12 09:57:52"},
            {"PIN":"21","DateTime":"2024-05-12 09:58:25"},
            {"PIN":"842544708","DateTime":"2024-05-12 09:59:44"},
            {"PIN":"3682883","DateTime":"2024-05-12 09:59:56"},
            {"PIN":"842544718","DateTime":"2024-05-12 10:00:00"},
            {"PIN":"98","DateTime":"2024-05-12 10:00:02"},
            {"PIN":"842544718","DateTime":"2024-05-12 10:00:05"},
            {"PIN":"139","DateTime":"2024-05-12 10:00:46"},
            {"PIN":"118","DateTime":"2024-05-12 10:01:03"},
            {"PIN":"5","DateTime":"2024-05-12 10:01:14"},
            {"PIN":"842544712","DateTime":"2024-05-12 10:02:52"},
            {"PIN":"3682871","DateTime":"2024-05-12 10:03:47"},
            {"PIN":"11","DateTime":"2024-05-12 10:04:08"},
            {"PIN":"80","DateTime":"2024-05-12 10:05:31"},
            {"PIN":"3682880","DateTime":"2024-05-12 10:06:03"},
            {"PIN":"842544699","DateTime":"2024-05-12 10:06:17"},
            {"PIN":"6","DateTime":"2024-05-12 10:06:23"},
            {"PIN":"842544706","DateTime":"2024-05-12 10:08:09"},
            {"PIN":"842544723","DateTime":"2024-05-12 10:09:00"},
            {"PIN":"842544720","DateTime":"2024-05-12 10:09:07"},
            {"PIN":"842544723","DateTime":"2024-05-12 10:09:12"},
            {"PIN":"3682882","DateTime":"2024-05-12 10:09:30"},
            {"PIN":"3682882","DateTime":"2024-05-12 10:09:37"},
            {"PIN":"842544695","DateTime":"2024-05-12 10:10:52"},
            {"PIN":"842544716","DateTime":"2024-05-12 10:11:03"},
            {"PIN":"842544714","DateTime":"2024-05-12 10:12:00"},
            {"PIN":"16","DateTime":"2024-05-12 10:12:07"},
            {"PIN":"3682903","DateTime":"2024-05-12 10:12:10"},
            {"PIN":"3682876","DateTime":"2024-05-12 10:12:16"},
            {"PIN":"16","DateTime":"2024-05-12 10:12:28"},
            {"PIN":"842544707","DateTime":"2024-05-12 10:12:31"},
            {"PIN":"842544715","DateTime":"2024-05-12 10:12:37"},
            {"PIN":"81","DateTime":"2024-05-12 10:13:30"},
            {"PIN":"17","DateTime":"2024-05-12 10:13:34"},
            {"PIN":"81","DateTime":"2024-05-12 10:13:38"},
            {"PIN":"48","DateTime":"2024-05-12 10:14:34"},
            {"PIN":"48","DateTime":"2024-05-12 10:14:47"},
            {"PIN":"30","DateTime":"2024-05-12 10:14:51"},
            {"PIN":"13","DateTime":"2024-05-12 10:17:06"},
            {"PIN":"3682896","DateTime":"2024-05-12 10:17:12"},
            {"PIN":"130","DateTime":"2024-05-12 10:17:15"},
            {"PIN":"3682896","DateTime":"2024-05-12 10:17:22"},
            {"PIN":"3682869","DateTime":"2024-05-12 10:17:23"},
            {"PIN":"3682869","DateTime":"2024-05-12 10:17:25"},
            {"PIN":"130","DateTime":"2024-05-12 10:17:28"},
            {"PIN":"842544713","DateTime":"2024-05-12 10:18:11"},
            {"PIN":"113","DateTime":"2024-05-12 10:18:57"},
            {"PIN":"99","DateTime":"2024-05-12 10:19:17"},
            {"PIN":"15","DateTime":"2024-05-12 10:19:28"},
            {"PIN":"842544721","DateTime":"2024-05-12 10:20:10"},
            {"PIN":"842544721","DateTime":"2024-05-12 10:20:15"},
            {"PIN":"91","DateTime":"2024-05-12 10:25:20"},
            {"PIN":"68","DateTime":"2024-05-12 10:28:27"},
            {"PIN":"129","DateTime":"2024-05-12 10:30:08"},
            {"PIN":"43","DateTime":"2024-05-12 10:32:37"},
            {"PIN":"113","DateTime":"2024-05-12 10:34:22"},
            {"PIN":"129","DateTime":"2024-05-12 10:35:04"},
            {"PIN":"842544695","DateTime":"2024-05-12 10:36:01"},
            {"PIN":"3682905","DateTime":"2024-05-12 10:38:15"},
            {"PIN":"129","DateTime":"2024-05-12 10:39:49"},
            {"PIN":"129","DateTime":"2024-05-12 10:39:59"},
            {"PIN":"21","DateTime":"2024-05-12 10:40:51"},
            {"PIN":"114","DateTime":"2024-05-12 10:41:45"},
            {"PIN":"54","DateTime":"2024-05-12 10:44:31"},
            {"PIN":"8199665","DateTime":"2024-05-12 10:52:13"},
            {"PIN":"62","DateTime":"2024-05-12 10:57:33"},
            {"PIN":"113","DateTime":"2024-05-12 10:57:46"},
            {"PIN":"114","DateTime":"2024-05-12 10:58:59"},
            {"PIN":"842544693","DateTime":"2024-05-12 11:00:41"},
            {"PIN":"842544717","DateTime":"2024-05-12 11:07:52"}
            ]';*/

        $attendanceJson = '[{"PIN":"119","DateTime":"2024-05-12 08:08:38"},{"PIN":"43","DateTime":"2024-05-12 08:19:20"},{"PIN":"43","DateTime":"2024-05-12 08:19:46"},{"PIN":"113","DateTime":"2024-05-12 08:42:49"}]';
        $attendanceArray = json_decode($attendanceJson, true);
        $attendanceCollection = collect($attendanceArray);
        $groupedAttendance = $attendanceCollection->groupBy('PIN');
        $clockInOutData = [];
        foreach ($groupedAttendance as $pin => $attendances) {
            $sortedAttendances = $attendances->sortBy('DateTime');
            $attendanceCount = $attendances->count();
            $clockIn = $sortedAttendances->first()['DateTime'];
            $clockOut = $attendanceCount == 1 ? null : $sortedAttendances->last()['DateTime'];
            $clockInOutData[] = [
                'PIN' => $pin,
                'ClockIn' => $clockIn,
                'ClockOut' => $clockOut
            ];
        }
        $clockInOutJson = json_encode($clockInOutData, JSON_PRETTY_PRINT);


        $response=[
            'status'=>1,
            'data'=>$clockInOutData
        ];
        return $response;
    }

    public function bulkTag(Request $request)
    {
        if($request->has('file')){
            $file=$request->file('file');
            if (!($file->getClientOriginalExtension() === 'xls' || $file->getClientOriginalExtension() === 'xlsx')) {
                return back()->with('error', "None excel file not accepted");
            }
            $data = Excel::toCollection([], $file);
            $rows = $data[0]->toArray();
            $columnNames = $data->first()->first();

            $rowCount=0;
            $successCount=0;
            $errorCount=0;
            foreach (array_slice($rows, 1) as $row) {
                $rowCount++;
                $emp_id=$row['2'];
                $biometric_id=$row['1'];
                if(!$emp_id) {
                    $errorRow[]=[
                        'data'=>$row,
                        'status'=>0,
                        'msg'=>'Missing: Employee Id'
                    ];
                    $errorCount++;
                    continue;
                }
                $employee=Employee::where('emp_id', $emp_id)->first();
                if($employee){
                    $employee->biometric_id = $biometric_id;
                    if($employee->update()){
                        $errorRow[]=[
                            'data'=>$row,
                            'status'=>1,
                            'msg'=>'Success'
                        ];
                        $successCount++;
                    }
                }else{
                    $errorRow[]=[
                        'data'=>$row,
                        'status'=>0,
                        'msg'=>'Not Exists'
                    ];
                    $errorCount++;
                }
            }
            $importLog=new ImportLog();
            $importLog->name="Employee Biometric ID";
            $importLog->description=json_encode($errorRow);
            $importLog->row_count=$rowCount;
            $importLog->success_count=$successCount;
            $importLog->error_count=$errorCount;
            $importLog->save();
            return back()->with('success', "Tagged");
        }else{
            return back()->with('error', "Invalid Files");
        }
    }

    public function markattendance()
    {
        return view('attendance.mark-attendance.index');

    }
    public function bulkattendance()
    {
        return view('attendance.bulk-attendance.index');
    }



}
