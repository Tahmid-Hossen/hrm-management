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
        $employee->address = $request->address;
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

    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }

}
