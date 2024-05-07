<?php

namespace App\Http\Controllers;

use App\Mail\NewUserMail;
use App\Models\Company;
use App\Models\Departments;
use App\Models\Designations;
use App\Models\EmployeeEducation;
use App\Models\ImportLog;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class EmployeeController extends Controller
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
            $designation = $request->designation;
            $limit = $request->length;
            if ($limit < 0) $limit = 10;
            $offset = $request->start;
            // Orders
            $orderByColumn = null;
            $orderByDirection = null;

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
                    // Handle unknown column
                    break;
            }

            $recordsFiltered = $query->get();  // Filtered Data to count
            $query->limit($limit)->offset($offset);

            $employees = $query->get();

            $employeeData = [];
            foreach ($employees as $item) {
                $employeeData[] = [
                    'id' => $item->id,
                    'emp_id' => $item->emp_id ?? '',
                    'full_name' => $item->full_name ?? '',
                    'email' => $item->email ?? '',
                    'phone' => $item->phone ?? '',
                    'gender' => $item->gender ?? '',
                    'designation' => $item->empDesignation->name ?? '',
                    'department' => $item->empDepartment->name ?? '',
                    'company' => $item->empCompany->name ?? '',
                ];
            }
            $request = [
                'status' => 1,
                'recordsTotal' => $recordsTotal,
                'recordsFiltered' => $recordsFiltered->count(),
                'data' => $employeeData,
                'orderableColumns' => $orderByColumn . $orderByDirection
            ];
            return response()->json($request);
        }

        $trashedEmployees = Employee::onlyTrashed()->get();
        return view('employee.index', compact('companies', 'designations', 'departments', 'trashedEmployees'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $designations = Designations::all();
            $departments = Departments::all();
            $companies = Company::get();
            $html = View::make('employee.create', compact('departments', 'designations', 'companies'))->render();
            $request = [
                'status' => 1,
                'html' => $html,
            ];
            return response()->json($request);
        }
    }

    public function store(Request $request)
    {
        //return $request;
        $employee = new Employee();
        $employee->emp_id = $request->emp_id;
        $employee->full_name = $request->full_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->birth_year = $request->birth_year;
        $employee->gender = $request->gender;
        $employee->blood_group = $request->blood_group;
        $employee->emergency_contact = $request->emergency_contact;
        $employee->permanent_address = $request->permanent_address;
        $employee->present_address = $request->present_address;
        $employee->company = $request->company;
        $employee->designation = $request->designation;
        $employee->department = $request->emp_department;
        $employee->joining_date = $request->joining_date;

        if ($employee->save()) {
            $employeeId = $employee->id;
            $isUpdateable=false;
            if ($request->hasFile('profile_photo')) {
                $profilePhoto = $request->file('profile_photo');
                $profilePhotoName = $employeeId.'_'.time().'_' . $profilePhoto->getClientOriginalName();
                $profilePhoto->move(public_path('uploads/employees/profile'), $profilePhotoName);
                $employee->profile_photo = $profilePhotoName;
                $isUpdateable=true;
            }
            if ($request->hasFile('employee_resume')) {
                $resumeFile = $request->file('employee_resume');
                $resumeFileName = $employeeId.'_'.time().'_'.$resumeFile->getClientOriginalName();
                $resumeFile->move(public_path('uploads/employees/resume'), $resumeFileName);
                $employee->employee_resume = $resumeFileName;
                $isUpdateable=true;
            }
            if($isUpdateable){
                $employee->save();
            }


            /*$institutionNames = $request->institution_name;
            $degree = $request->degree;
            $department = $request->department;
            $passing_year = $request->passing_year;
            $result = $request->result;
            $educationInfo = [];
            if ($degree) {
                foreach ($degree as $key => $item) {
                    $educationInfo[] = [
                        'emp_id' => $employeeId,
                        'institution_name' =>$institutionNames[$key]  ?? '',
                        'degree' => $item ?? '',
                        'department' => $department[$key] ?? '',
                        'passing_year' => $passing_year[$key] ?? 0,
                        'result' => $result[$key] ?? 0.00,
                    ];
                }
            }
            // return $educationInfo;
            if ($educationInfo) {
                EmployeeEducation::insert($educationInfo);
            }*/

            return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
        }
        abort(403);


        // Validate the request
        /*$request->validate([
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for profile photo
            'employee_resume' => 'file|mimes:doc,pdf,xlsx|max:2048', // Validation for allowed file types for resume
            'phone' => 'required|numeric|digits:11', // Validation for phone number
        ]);*/
        // Handle profile photo upload


        // Handle employee resume upload



        // Create a new employee record

        // $employee->password = bcrypt($request->password);
        // Store profile photo and resume file names if they exist
        if (isset($profilePhotoName)) {
            $employee->profile_photo = $profilePhotoName;
        }
        if (isset($resumeFileName)) {
            $employee->employee_resume = $resumeFileName;
        }

        // return $employee;
        if ($employee->save()) {
            $employeeId = $employee->id;
            $institutionNames = $request->institution_name;
            $degree = $request->degree;
            $department = $request->department;
            $passing_year = $request->passing_year;
            $result = $request->result;
            $educationInfo = [];
            if ($institutionNames) {
                foreach ($institutionNames as $key => $item) {
                    $educationInfo[] = [
                        'emp_id' => $employeeId,
                        'institution_name' => $item ?? '',
                        'degree' => $degree[$key] ?? '',
                        'department' => $department[$key] ?? '',
                        'passing_year' => $passing_year[$key] ?? 0,
                        'result' => $result[$key] ?? 0.00,
                    ];
                }
            }
            // return $educationInfo;
            if ($educationInfo) {
                EmployeeEducation::insert($educationInfo);
            }
            // return 1;
            return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
        }
    }

    public function edit(Request $request, $id)
    {

        if($request->ajax()){
            $a=$request->a;
            if($a=='personal'){
                $employee = Employee::find($id);
                $designations = Designations::all();
                $departments = Departments::all();
                $companies = Company::get();
                $html=View::make('employee.edit', compact('a', 'employee', 'companies', 'designations', 'departments'))->render();
                $response=[
                    'status'=>1,
                    'html'=>$html,
                ];
                return $response;
            }
            if($a=='address'){
                $employee = Employee::find($id);
                $html=View::make('employee.edit', compact('a', 'employee'))->render();
                $response=[
                    'status'=>1,
                    'html'=>$html,
                ];
                return $response;
            }
        }

        /*$employee = Employee::find($id); // Assuming you have an Employee model
        $designations = Designations::all();
        $departments = Departments::all();
        return view('employee.edit', compact('employee', 'designations', 'departments'));*/
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        if($employee){
            $a=$request->a;
            switch ($a) {
                case 'personal':
                    $employee->full_name = $request->full_name;
                    $employee->email = $request->email;
                    $employee->phone = $request->phone;
                    $employee->birth_year = $request->birth_year;
                    $employee->gender = $request->gender;
                    $employee->blood_group = $request->blood_group;
                    $employee->company = $request->company_name;
                    $employee->designation = $request->designation;
                    $employee->department = $request->emp_department;
                    $employee->joining_date = $request->joining_date;
                    $employee->emergency_contact = $request->emergency_contact;
                    break;
                case 'address':
                    $employee->present_address = $request->present_address;
                    $employee->permanent_address = $request->permanent_address;
                    break;
                case 'education':
                    $education=new EmployeeEducation();
                    $education->emp_id = $id;
                    $education->institution_name = $request->input('institution_name') ?? '';
                    $education->degree = $request->input('degree') ?? '';
                    $education->department = $request->input('department') ?? '';
                    $education->passing_year = $request->input('passing_year') ?? '';
                    $education->result = $request->input('result') ?? '';
                    if($education->save()){
                        return redirect()->route('employees.view', ['id'=>$id, 'active'=>$a])->with('success', 'Employee updated successfully.');
                    }
                    break;
                default:
                    // Default case if $a doesn't match any of the above cases
                    break;
            }
            if($employee->save()){
                return redirect()->route('employees.view', ['id'=>$id, 'active'=>$a])->with('success', 'Employee updated successfully.');
            }


        }
        /*$previousProfilePhotoPath = public_path('profile_images') . '/' . $employee->profile_photo;
        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            $profilePhoto = $request->file('profile_photo');
            $profilePhotoName = time() . '_' . $profilePhoto->getClientOriginalName();
            $profilePhoto->move(public_path('profile_images'), $profilePhotoName);

            $employee->profile_photo = $profilePhotoName;
            // Delete the previous profile photo if it exists
            if (file_exists($previousProfilePhotoPath) && is_file($previousProfilePhotoPath)) {
                unlink($previousProfilePhotoPath);
            }
            // else {
            //     $employee->profile_photo = $profilePhotoName;
            // }
        }
        //return $request;
        // Update employee fields
        $employee->emp_id = $request->emp_id;
        $employee->full_name = $request->full_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->birth_year = $request->birth_year;
        $employee->gender = $request->gender;
        $employee->blood_group = $request->blood_group;
        if ($request->designation != '') $employee->designation = $request->designation;
        if ($request->emp_department != '') $employee->department = $request->emp_department;

        $employee->joining_date = $request->joining_date;
        $employee->emergency_contact = $request->emergency_contact;
        // $employee->emergency_contact_relation = $request->emergency_contact_relation;
        $employee->permanent_address = $request->permanent_address;
        if (isset($profilePhotoName)) {
            $employee->profile_photo = $profilePhotoName;
        }
        $employee->save();
        return redirect()->route('employees.view', $id)->with('success', 'Employee updated successfully.');*/
    }

    public function updateAdress(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->present_address = $request->present_address;
        $employee->permanent_address = $request->permanent_address;
        $employee->save();
        return redirect()->route('employees.view', $id)->with('success', 'Employee updated successfully.');
    }

    public function updateDocuments(Request $request, $id)
    {
        $request->validate([
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for profile photo
            'employee_resume' => 'file|mimes:doc,pdf,xlsx|max:2048', // Validation for allowed file types for resume
            // Add more validation rules for other fields if necessary
        ]);
        $employee = Employee::find($id);
        $previousProfileDocumentsPath = public_path('employee_resume') . '/' . $employee->employee_resume;
        // Handle employee resume upload
        if ($request->hasFile('employee_resume')) {
            $resumeFile = $request->file('employee_resume');
            $resumeFileName = time() . '_' . $resumeFile->getClientOriginalName();
            $resumeFile->move(public_path('employee_resume'), $resumeFileName);

            $employee->employee_resume = $resumeFileName;
            // Delete the previous profile photo if it exists
            if (file_exists($previousProfileDocumentsPath) && is_file($previousProfileDocumentsPath)) {
                unlink($previousProfileDocumentsPath);
            }
            // else {
            //     $employee->resumeFile = $resumeFileName;
            // }
        } else {
            return "There was no existing documents for this employee";
        }

        if (isset($resumeFileName)) {
            $employee->employee_resume = $resumeFileName;
        }
        // return $employee;
        $employee->save();
        return redirect()->route('employees.view', $id)->with('success', 'Employee documents updated successfully.');
    }

    public function updateEducation(Request $request, $id)
    {
        $employee = Employee::find($id);
        // Check if employee exists
        if ($employee) {
            $institutionNames = $request->input('institution_name');
            $degree = $request->input('degree');
            $department = $request->input('department');
            $passing_year = $request->input('passing_year');
            $result = $request->input('result');

            $educationInfo = [];

            // Loop through each item in the arrays
            foreach ($institutionNames as $key => $item) {
                $educationInfo[] = [
                    'emp_id' => $id,
                    'institution_name' => $item,
                    'degree' => $degree[$key],
                    'department' => $department[$key],
                    'passing_year' => $passing_year[$key],
                    'result' => $result[$key],
                ];
            }

            // Delete existing education info for the employee
            EmployeeEducation::where('emp_id', $id)->delete();

            // Insert updated education info
            EmployeeEducation::insert($educationInfo);

            return redirect()->route('employees.view', $id)->with('success', 'Employee education updated successfully.');


            // Check if all variables are arrays
            if (is_array($institutionNames) && is_array($degree) && is_array($department) && is_array($passing_year) && is_array($result)) {

            } else {
                // Handle the case where one of the variables is not an array
                return redirect()->back()->with('error', 'Invalid input data.');
            }
        } else {
            // Handle case where employee is not found
            return redirect()->back()->with('error', 'Employee not found.');
        }
    }

    public function view($id)
    {
        $employee = Employee::find($id);
        $designations = Designations::all();
        $departments = Departments::all();
        // return $designations;
        return view('employee.view', compact('employee', 'designations', 'departments'));
    }


    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }

    public function forceDelete($id)
    {
        $employee = Employee::withTrashed()->findOrFail($id);
        $employee->forceDelete();

        return redirect()->back()->with('success', 'Employee permanently deleted.');
    }

    public function employeePermission(Request $request, $id)
    {
        // return $request->all();
        $employee = Employee::findOrFail($id);

        if (!$request->employeeData) {
            $password = 'NexHRM#' . \Str::password(16, true, true, false, false);

            DB::beginTransaction();

            try {
                $user = new User();
                $user->name = $employee->full_name;
                $user->email = $employee->email;
                $user->employee_id = $id;
                $user->password = Hash::make($password);
                $user->save();
                $userRole = Role::where('name', 'staff')->first();
                $user->roles()->attach($userRole);

                DB::commit();

                $data = [
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => $password,
                ];

                $email = new NewUserMail($data);
                $email->userData = $data;
                \Mail::to($user->email)->send($email);


                return response()->json(['message' => 'User permission added successfully', 'status' => true], 201);

                // all good
            } catch (\Exception $e) {
                DB::rollback();
                // something went wrong
            }
        } else {

            $User = User::findOrFail($request->employeeData);

            $User->forceDelete();

            return response()->json(['message' => 'User permission removed successfully', 'status' => true], 200);
            //delete staff role in future
        }

        return response()->json(['message' => 'User permission added Failed', 'status' => true], 400);
    }
    public function validateSingleData(Request $request)
    {
        if($request->ajax()){
            $dataContent=$request->a;
            $dataValue=$request->val;
            if($dataContent=='email'){
                if(Employee::where('email', $dataValue)->count()==0) $response = ['status' => 1,'msg' => 'Usable'];
                else $response = ['status' => 0,'msg' => 'This email is already exists'];
                return response()->json($response);
            }
            if($dataContent=='phone'){
                if(Employee::where('phone', $dataValue)->count()==0) $response = ['status' => 1,'msg' => 'Usable'];
                else $response = ['status' => 0,'msg' => 'This Phone is already exists'];
                return response()->json($response);
            }
            if($dataContent=='emp_id'){
                if(Employee::where('emp_id', $dataValue)->count()==0) $response = ['status' => 1,'msg' => 'Usable'];
                else $response = ['status' => 0,'msg' => 'This Employee ID is already exists'];
                return response()->json($response);
            }

        }
        abort(403);
    }
    public function importEmployees(Request $request)
    {
        return view('employee.import.index');
    }
    public function importEmployeesSubmit(Request $request)
    {
        if($request->has('file')){
            $file=$request->file('file');
            $data = Excel::toCollection([], $file);
            $rows = $data[0]->toArray();
            $columnNames = $data->first()->first();
            $colDefs='["Sl No.","ID Number","Name","NID Number","Company","Department","Designation","Joining Date","Cell Number","Emergency Cell Number","Blood Group","Personal Mail Address","Official Mail Address","Gender","Resign Date"]';
            if($colDefs!=(string)$columnNames){

                return 'invalid format of data';
                //return View::make('import-export.showProblems')->with('invalidTemplate', '1');
            }
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
            $rowCount=0;
            $successCount=0;
            $errorCount=0;
            foreach (array_slice($rows, 1) as $row) {
                $rowCount++;
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
                $gender=$row['13'];
                $resignData=null; if($row['14']!='') $resignData = date('Y-m-d', Date::excelToTimestamp($row['14']));

                if(!$emp_id) {
                    $errorRow[]=[
                        'data'=>$row,
                        'status'=>0,
                        'msg'=>'Missing: Employee Id'
                    ];
                    $errorCount++;
                    continue;
                }
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
                    $employee->gender = $gender;
                    $employee->nid = $nid;
                    if($employee->save()){
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
                        'msg'=>'Exists'
                    ];
                    $errorCount++;
                }
            }
            $importLog=new ImportLog();
            $importLog->name="Employee Import";
            $importLog->description=json_encode($errorRow);
            $importLog->row_count=$rowCount;
            $importLog->success_count=$successCount;
            $importLog->error_count=$errorCount;
            $importLog->save();
            return view('employee.import.summary', compact('errorRow'));
            echo '<pre>';
            print_r($errorRow);
            echo '</pre>';
        }else{

        }
    }


}
