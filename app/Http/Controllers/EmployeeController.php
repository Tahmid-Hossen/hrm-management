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
        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            $profilePhoto = $request->file('profile_photo');
            $profilePhotoName = time() . '_' . $profilePhoto->getClientOriginalName();
            $profilePhoto->storeAs('public/profile_photos', $profilePhotoName); // Store the photo in storage/app/public/profile_photos directory
        }

        // Create a new employee record
        $employee = new Employee();
        $employee->employee_id = $request->employee_id;
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
        $employee->password = bcrypt($request->password); // Hash the password
        // Handle profile photo upload if needed
        if (isset($profilePhotoName)) {
            $employee->profile_photo = $profilePhotoName; // Assign profile photo name to the profile_photo field
        }
        // dd($request->all());
        $employee->save(); // Save the employee record

        // Redirect to the index page or wherever appropriate
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit($id)
    {
        $employee = Employee::find($id); // Assuming you have an Employee model
        return view('employees.edit', compact('employee'));
    }
    
    public function update(Request $request, $id)
    {
        // Find the employee record by ID
        $employee = Employee::find($id);
        
        // Check if the employee exists
        if (!$employee) {
            return redirect()->route('employees.index')->with('error', 'Employee not found.');
        }

        // Update employee fields
        $employee->employee_id = $request->employee_id;
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

        // Handle profile photo upload if provided
        if ($request->hasFile('profile_photo')) {
            $profilePhoto = $request->file('profile_photo');
            $profilePhotoName = time() . '_' . $profilePhoto->getClientOriginalName();
            $profilePhoto->storeAs('public/profile_photos', $profilePhotoName);
            $employee->profile_photo = $profilePhotoName;
        }

        // Save the updated employee
        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function view(){
        return view('employee.view');
    }


    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }

}
