<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;

class DepartmentController extends Controller
{
    public function create(){
        return view("settings.department.create");
    }
    public function index(){
        $departments = Departments::all();
        return view("settings.department.index", compact('departments'));

    }
    public function store(Request $request){
        $department = new Departments;
        $department->name = $request->name;
        $department->is_active = $request->is_active;
        $department->save();
        return redirect()->route('department.index')->with('success', 'department created successfully');
    }

    public function edit($id){
        $department = Departments::find($id);
        return view('settings.department.edit', compact('department'));
    }

    public function update(Request $request, $id){
        $department = Departments::find($id);
        $department->name = $request->name;
        $department->is_active = $request->is_active;
        $department->save();
        // session()->flash('key', 'value');
        return redirect()->route('department.index')->with('success', 'department updated successfully');
    }

    public function delete($id)
    {
        $department = Departments::findOrFail($id);
        $department->delete();
    
        return redirect()->route('department.index')->with('success', 'department deleted successfully');
    }
}
