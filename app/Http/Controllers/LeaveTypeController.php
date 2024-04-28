<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveType;

class LeaveTypeController extends Controller
{
    public function create(){
        return view("settings.leave-type.create");
    }
    public function index(){
        $leave_types = LeaveType::all();
        return view("settings.leave-type.index", compact('leave_types'));
    }

    public function store(Request $request){
        // return $request;
        $leave_type = new LeaveType;
        $leave_type->name = $request->name;
        $leave_type->is_active = $request->is_active;
        $leave_type->save();
        return redirect()->route('leave-type.index')->with('success', 'Leave Type created successfully');
    }

    public function edit($id){
        $leave_type = LeaveType::find($id);
        return view('settings.leave-type.edit', compact('leave_type'));
    }

    public function update(Request $request, $id){
        $leave_type = LeaveType::find($id);
        $leave_type->name = $request->name;
        $leave_type->is_active = $request->is_active;
        $leave_type->save();
        // session()->flash('key', 'value');
        return redirect()->route('leave-type.index')->with('success', 'Leave Type updated successfully');
    }

    public function delete($id){
        $leave_type = LeaveType::findOrFail($id);
        $leave_type->delete();

        return redirect()->route('leave-type.index')->with('success', 'Leave Type deleted successfully');
    }
}
