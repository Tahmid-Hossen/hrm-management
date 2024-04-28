<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designations;

class DesignationController extends Controller
{
    public function create(){
        return view("settings.designation.create");
    }
    public function index(){
        $designations = Designations::all();
        return view("settings.designation.index", compact('designations'));

    }
    public function store(Request $request){
        $designation = new Designations;
        $designation->name = $request->name;
        $designation->is_active = $request->is_active;
        $designation->save();
        return redirect()->route('designation.index')->with('success', 'designation created successfully');
    }

    public function edit($id){
        $designation = Designations::find($id);
        return view('settings.designation.edit', compact('designation'));
    }

    public function update(Request $request, $id){
        $designation = Designations::find($id);
        $designation->name = $request->name;
        $designation->is_active = $request->is_active;
        $designation->save();
        return redirect()->route('designation.index')->with('success', 'designation updated successfully');
    }

    public function delete($id)
    {
        $designation = Designations::findOrFail($id);
        $designation->delete();
    
        return redirect()->route('designation.index')->with('success', 'designation deleted successfully');
    }
}
