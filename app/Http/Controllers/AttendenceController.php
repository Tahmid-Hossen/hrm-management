<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function index()
    {
        return "index";
    }
    public function markattendance()
    {
        return view('attendance.mark-attendance.index');
        
    }
    public function bulkattendance()
    {
        return view('attendance.bulk-attendance.index');
    }
}
