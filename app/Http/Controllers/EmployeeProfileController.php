<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
// use App\Models\Employee;

class EmployeeProfileController extends Controller
{
    public function index()
    {
        // return view('employee-profile.index');
        $employees = Employee::all();
        // return $employees;
        return view('employee-profile.index', compact('employees'));
    }
}
