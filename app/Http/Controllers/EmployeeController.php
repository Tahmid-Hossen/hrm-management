<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
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
        $employee->emergency_contact = $request->emergency_contact;
        $employee->emergency_contact_relation = $request->emergency_contact_relation;
        $employee->permanent_address = $request->permanent_address;
        $employee->is_user = $request->is_user;


        $employee->institution_name_one = $request->institution_name_one;
        $employee->institution_name_two = $request->institution_name_two;
        $employee->institution_name_three = $request->institution_name_three;
        $employee->institution_name_four = $request->institution_name_four;


        $employee->degree_one = $request->degree_one;
        $employee->degree_two = $request->degree_two;
        $employee->degree_three = $request->degree_three;
        $employee->degree_four = $request->degree_four;


        $employee->department_one = $request->department_one;
        $employee->department_two = $request->department_two;
        $employee->department_three = $request->department_three;
        $employee->department_four = $request->department_four;


        $employee->passing_year_one = $request->passing_year_one;
        $employee->passing_year_two = $request->passing_year_two;
        $employee->passing_year_three = $request->passing_year_three;
        $employee->passing_year_four = $request->passing_year_four;


        $employee->result_one = $request->result_one;
        $employee->result_two = $request->result_two;
        $employee->result_three = $request->result_three;
        $employee->result_four = $request->result_four;


        $employee->present_address = $request->present_address;
        $employee->company_name = $request->company_name;
        $employee->designation = $request->designation;
        $employee->joining_date = $request->joining_date;
        $employee->password = bcrypt($request->password);
        if (isset($resumeFileName)) {
            $employee->employee_resume = $resumeFileName;
        }
        if (isset($profilePhotoName)) {
            $employee->profile_photo = $profilePhotoName;
        }

        // dd($request->all());
        $employee->save();
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit($id)
    {
        $employee = Employee::find($id); // Assuming you have an Employee model
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);

        // Handle profile photo upload if provided
        if ($request->hasFile('profile_photo')) {
            $profilePhoto = $request->file('profile_photo');
            $profilePhotoName = time() . '_' . $profilePhoto->getClientOriginalName();
            $profilePhoto->move(public_path('profile_images'), $profilePhotoName);
            // Delete old profile photo if exists
            // if ($employee->profile_photo) {
            //     unlink(public_path('profile_images/' . $employee->profile_photo));
            // }
            // Update profile photo field with new photo name
            $employee->profile_photo = $profilePhotoName;
        }

        // Handle CV file upload if provided
        if ($request->hasFile('employee_resume')) {
            $resumeFile = $request->file('employee_resume');
            $resumeFileName = time() . '_' . $resumeFile->getClientOriginalName();
            $resumeFile->move(public_path('employee_resume'), $resumeFileName);
            // Delete old resume file if exists
            // if ($employee->employee_resume) {
            //     unlink(public_path('employee_resume/' . $employee->employee_resume));
            // }
            // Update resume file field with new file name
            $employee->employee_resume = $resumeFileName;
        }


        // Update employee fields
        $employee->emp_id = $request->emp_id;
        $employee->full_name = $request->full_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->birth_year = $request->birth_year;
        $employee->gender = $request->gender;
        $employee->present_address = $request->present_address;
        $employee->permanent_address = $request->permanent_address;
        $employee->designation = $request->designation;

        $employee->institution_name_one = $request->institution_name_one;
        $employee->institution_name_two = $request->institution_name_two;
        $employee->institution_name_three = $request->institution_name_three;
        $employee->institution_name_four = $request->institution_name_four;


        $employee->degree_one = $request->degree_one;
        $employee->degree_two = $request->degree_two;
        $employee->degree_three = $request->degree_three;
        $employee->degree_four = $request->degree_four;


        $employee->department_one = $request->department_one;
        $employee->department_two = $request->department_two;
        $employee->department_three = $request->department_three;
        $employee->department_four = $request->department_four;


        $employee->passing_year_one = $request->passing_year_one;
        $employee->passing_year_two = $request->passing_year_two;
        $employee->passing_year_three = $request->passing_year_three;
        $employee->passing_year_four = $request->passing_year_four;


        $employee->result_one = $request->result_one;
        $employee->result_two = $request->result_two;
        $employee->result_three = $request->result_three;
        $employee->result_four = $request->result_four;


        $employee->joining_date = $request->joining_date;
        $employee->emergency_contact = $request->emergency_contact;
        $employee->emergency_contact_relation = $request->emergency_contact_relation;
        $employee->permanent_address = $request->permanent_address;
        $employee->is_user = $request->is_user;

        // Save the updated employee
        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function view($id) {
        $employee = Employee::find($id);

        return view('employee.view', compact('employee'));
    }


    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }

}
