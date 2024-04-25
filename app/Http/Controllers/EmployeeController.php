<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use App\Models\Designations;
use App\Models\EmployeeEducation;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    

    public function index()
    {
        $designations = Designations::all();
        $departments = Departments::all();
        // return $departments;
        $employees = Employee::all();
        return view('employee.index', compact('employees','designations','departments'));
    }

    public function store(Request $request)
    {
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
        if($employee->save()){
            $employeeId=$employee->id;
            $institutionNames=$request->institution_name;
            $degree=$request->degree;
            $department=$request->department;
            $passing_year=$request->passing_year;
            $result=$request->result;
            $educationInfo=[];
            if($institutionNames){
                foreach ($institutionNames as $key=>$item){
                    $educationInfo[]=[
                        'emp_id'=>$employeeId,
                        'institution_name'=>$item,
                        'degree'=>$degree[$key],
                        'department'=>$department[$key],
                        'passing_year'=>$passing_year[$key],
                        'result'=>$result[$key],
                    ];
                }
            }
            if($educationInfo){
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
        return view('employee.edit', compact('employee','designations','departments'));
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


        // Update employee fields
        $employee->emp_id = $request->emp_id;
        $employee->full_name = $request->full_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->birth_year = $request->birth_year;
        $employee->gender = $request->gender;
        $employee->blood_group = $request->blood_group;
        $employee->present_address = $request->present_address;
        $employee->permanent_address = $request->permanent_address;
        // $employee->designation = $request->designation;
        // $employee->department = $request->emp_department;

         // Update designation if provided
        if ($request->has('designation')) {
            $designation = Designations::find($request->designation);
            if ($designation) {
                $employee->designation()->associate($designation);
            }
        }

        // Update department if provided
        if ($request->has('emp_department')) {
            $department = Departments::find($request->emp_department);
            if ($department) {
                $employee->department()->associate($department);
            }
        }

        $employee->joining_date = $request->joining_date;
        $employee->emergency_contact = $request->emergency_contact;
        // $employee->emergency_contact_relation = $request->emergency_contact_relation;
        $employee->permanent_address = $request->permanent_address;
        $employee->is_user = $request->is_user;

        // Save the updated employee
        if($employee->save()){
            $employeeId=$employee->id;
            $institutionNames=$request->institution_name;
            $degree=$request->degree;
            $department=$request->department;
            $passing_year=$request->passing_year;
            $result=$request->result;
            $educationInfo=[];
            if($institutionNames){
                foreach ($institutionNames as $key=>$item){
                    $educationInfo[]=[
                        'emp_id'=>$employeeId,
                        'institution_name'=>$item,
                        'degree'=>$degree[$key],
                        'department'=>$department[$key],
                        'passing_year'=>$passing_year[$key],
                        'result'=>$result[$key],
                    ];
                }
            }
            if($educationInfo){
                EmployeeEducation::where('emp_id', $employeeId)->delete();
                EmployeeEducation::insert($educationInfo);
            }
            return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
        }

    }

    public function view($id) {
        $employee = Employee::find($id);
        $designations = Designations::all();
        $departments = Departments::all();
        return view('employee.view', compact('employee','designations','departments'));
    }


    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }

}
