<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeProfileController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        // return $employees;
        return view('employee-profile.index', compact('employees')); 
        // return view('employee-profile.index');
    }
}
