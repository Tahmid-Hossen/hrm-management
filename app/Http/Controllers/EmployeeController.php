<?php

namespace App\Http\Controllers;

use App\Mail\NewUserMail;
use App\Models\Departments;
use App\Models\Designations;
use App\Models\EmployeeEducation;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{


    // public function index()
    // {
    //     $designations = Designations::all();
    //     $departments = Departments::all();
    //     $employees = Employee::with('empDesignation', 'user')->get();
    //     return view('employee.index', compact('employees', 'designations', 'departments'));
    // }

    public function index()
    {
        $designations = Designations::all();
        $departments = Departments::all();
        $employees = Employee::with('empDesignation', 'user')->get();
        $trashedEmployees = Employee::onlyTrashed()->get();
        return view('employee.index', compact('employees', 'designations', 'departments', 'trashedEmployees'));
    }



    public function store(Request $request)
    {
        // return $request;
        if ($request->hasFile('profile_photo')) {
            $profilePhoto = $request->file('profile_photo');
            $profilePhotoName = time() . '_' . $profilePhoto->getClientOriginalName();
            $profilePhoto->move(public_path('profile_images'), $profilePhotoName);
        }


        if ($request->hasFile('employee_resume')) {
            $resumeFile = $request->file('employee_resume');
            $resumeFileName = time() . '_' . $resumeFile->getClientOriginalName();
            $resumeFile->move(public_path('employee_resume'), $resumeFileName); // Store the resume file in public/employee_resume directory
        }

        // Create a new employee record
        $employee = new Employee();
        $employee->emp_id = $request->emp_id;
        $employee->full_name = $request->full_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->birth_year = $request->birth_year;
        $employee->gender = $request->gender;
        $employee->blood_group = $request->blood_group;
        $employee->emergency_contact = $request->emergency_contact;
        // $employee->emergency_contact_relation = $request->emergency_contact_relation;
        $employee->permanent_address = $request->permanent_address;
        $employee->is_user = $request->is_user;


        $employee->present_address = $request->present_address;
        $employee->company_name = $request->company_name;
        $employee->designation = $request->designation;
        $employee->department = $request->emp_department;
        $employee->joining_date = $request->joining_date;
        // $employee->password = bcrypt($request->password);
        if (isset($resumeFileName)) {
            $employee->employee_resume = $resumeFileName;
        }
        if (isset($profilePhotoName)) {
            $employee->profile_photo = $profilePhotoName;
        }

        //  // Associate department
        // if ($request->has('department')) {
        //     $department = Departments::find($request->department);
        //     if ($department) {
        //         $employee->department()->associate($department);
        //         $employee->save();
        //     }
        // }

        // // Associate designation
        // if ($request->has('designation')) {
        //     $designation = Designations::find($request->designation);
        //     if ($designation) {
        //         $employee->designation()->associate($designation);
        //         $employee->save();
        //     }
        // }

        // dd($request->all());
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

    public function edit($id)
    {
        $employee = Employee::find($id); // Assuming you have an Employee model
        $designations = Designations::all();
        $departments = Departments::all();
        return view('employee.edit', compact('employee', 'designations', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);

        // Handle profile photo upload if provided
        if ($request->hasFile('profile_photo')) {
            $profilePhoto = $request->file('profile_photo');
            $profilePhotoName = time() . '_' . $profilePhoto->getClientOriginalName();
            $profilePhoto->move(public_path('profile_images'), $profilePhotoName);
            $employee->profile_photo = $profilePhotoName;
        }

        // Handle CV file upload if provided
        if ($request->hasFile('employee_resume')) {
            $resumeFile = $request->file('employee_resume');
            $resumeFileName = time() . '_' . $resumeFile->getClientOriginalName();
            $resumeFile->move(public_path('employee_resume'), $resumeFileName);
            $employee->employee_resume = $resumeFileName;
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

        //  // Update designation if provided
        // if ($request->has('designation')) {
        //     $designation = Designations::find($request->designation);
        //     if ($designation) {
        //         $employee->designation()->associate($designation);
        //     }
        // }

        // // Update department if provided
        // if ($request->has('emp_department')) {
        //     $department = Departments::find($request->emp_department);
        //     if ($department) {
        //         $employee->department()->associate($department);
        //     }
        // }

        $employee->joining_date = $request->joining_date;
        $employee->emergency_contact = $request->emergency_contact;
        // $employee->emergency_contact_relation = $request->emergency_contact_relation;
        $employee->permanent_address = $request->permanent_address;
        $employee->is_user = $request->is_user;
        // return $employee->emp_id;

        // Save the updated employee
        // if ($employee->save()) {
        //     $employeeId = $employee->id;
        //     $institutionNames = $request->institution_name;
        //     $degree = $request->degree;
        //     $department = $request->department;
        //     $passing_year = $request->passing_year;
        //     $result = $request->result;
        //     $educationInfo = [];
        //     if ($institutionNames) {
        //         foreach ($institutionNames as $key => $item) {
        //             $educationInfo[] = [
        //                 'emp_id' => $employeeId,
        //                 'institution_name' => $item,
        //                 'degree' => $degree[$key],
        //                 'department' => $department[$key],
        //                 'passing_year' => $passing_year[$key],
        //                 'result' => $result[$key],
        //             ];
        //         }
        //     }
        //     if ($educationInfo) {
        //         EmployeeEducation::where('emp_id', $employeeId)->delete();
        //         EmployeeEducation::insert($educationInfo);
        //     }
        //     return redirect()->route('employees.view', $id)->with('success', 'Employee updated successfully.');
        // }
        return redirect()->route('employees.view', $id)->with('success', 'Employee updated successfully.');
    }

    public function updateAdress(Request $request, $id){
        $employee = Employee::find($id);
        $employee->present_address = $request->present_address;
        $employee->permanent_address = $request->permanent_address;
        $employee->save();
        return redirect()->route('employees.view', $id)->with('success', 'Employee updated successfully.');
    }

    public function updateEducation(Request $request, $id){
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
}
