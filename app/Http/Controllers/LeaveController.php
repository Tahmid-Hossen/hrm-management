<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{

    public function index()
    {
        $leaves = Leave::where('assigned_by', auth()->id())->get();
        return view("manage-leave.index", compact('leaves'));
    }
}
