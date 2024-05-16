<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{

    public function index()
    {
        $leaves = Leave::get();
        return view("leave.index", compact('leaves'));
    }
    public function store(){
        return 1;
    }

    public function leaveRequest()
    {
        $leaves = Leave::with('user.employee', 'leave_type')->where('assigned_by', auth()->id())->where('status_id', 1)->get();

        // dd($leaves[1]->user);
        return view("manage-leave.request", compact('leaves'));
    }
    public function leaveApproved()
    {
        $leaves = Leave::where('assigned_by', auth()->id())->where('status_id', 2)->get();
        return view("manage-leave.approve", compact('leaves'));
    }
    public function leaveReject()
    {
        $leaves = Leave::where('assigned_by', auth()->id())->where('status_id', 3)->get();
        return view("manage-leave.reject", compact('leaves'));
    }
}
