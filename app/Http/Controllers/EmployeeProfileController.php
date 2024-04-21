<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeProfileController extends Controller
{
    public function index()
    {
        return view('employee-profile.index');
    }
}
