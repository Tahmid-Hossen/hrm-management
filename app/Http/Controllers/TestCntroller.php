<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Departments;
use App\Models\Designations;
use App\Models\Employee;
use App\Models\ImportLog;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Facades\Excel;
class TestCntroller extends Controller
{
    /* public function index()
    {
        $file=public_path('excel\EmployeeAll.xlsx');
        $data = Excel::toCollection([], $file);
        $rows = $data[0]->toArray();
        $columnNames = $data->first()->first();
        $company=[];
        $departments=[];
        $designation=[];
        foreach (array_slice($rows, 1) as $row) {
            if(!in_array($row['4'], $company)) $company[]=$row['4'];
            if(!in_array($row['5'], $departments)) $departments[]=$row['5'];
            if(!in_array($row['6'], $designation)) $designation[]=$row['6'];
        }
        foreach ($company as $name) {
            if($name) Company::firstOrCreate(['name' => $name]);
        }
        foreach ($departments as $name) {
            if($name) Departments::firstOrCreate(['name' => $name]);
        }
        foreach ($designation as $name) {
            if($name) Designations::firstOrCreate(['name' => $name]);
        }
        $errorRow=[];
        foreach (array_slice($rows, 1) as $row) {
            $emp_id=$row['1'];
            $name=$row['2'];
            $nid=$row['3'];
            $comp=$row['4'];
            $dept=$row['5'];
            $desig=$row['6'];
            $joiningDate=null; if($row['7']!='') $joiningDate = date('Y-m-d', Date::excelToTimestamp($row['7']));
            $phone=$row['8'];
            $emergencyPhone=$row['9'];
            $bloodGroup=$row['10'];
            $personal_email=$row['11'];
            $email=$row['12'];
            $resignData=null; if($row['13']!='') $resignData = date('Y-m-d', Date::excelToTimestamp($row['13']));

            if(!$emp_id) continue;
            if(Employee::where('emp_id', $emp_id)->count()==0){
                $employee=new Employee();
                $employee->emp_id = $emp_id ?? '';
                $employee->full_name = $name;
                $employee->email = $email;
                $employee->phone = $phone;
                $employee->blood_group = $bloodGroup;
                $employee->emergency_contact = $emergencyPhone;
                $employee->company = Company::select('id')->where('name', $comp)->pluck('id')->first();
                $employee->designation = Designations::select('id')->where('name', $desig)->pluck('id')->first();
                $employee->department = Departments::select('id')->where('name', $dept)->pluck('id')->first();
                $employee->joining_date = $joiningDate;
                $employee->resign_date = $resignData;
                $employee->personal_email = $personal_email;
                $employee->nid = $nid;
                if($employee->save()){
                    $errorRow[]=[
                        'data'=>$row,
                        'msg'=>'Success'
                    ];
                }
            }else{
                $errorRow[]=[
                    'data'=>$row,
                    'msg'=>'Exists'
                ];
            }
        }
        $importLog=new ImportLog();
        $importLog->name="Employee Import";
        $importLog->description=json_encode($errorRow);
        $importLog->save();
        echo '<pre>';
            print_r($errorRow);
        echo '</pre>';

    } */
    public function import(){
        return view('test.import-component');
    }
}
