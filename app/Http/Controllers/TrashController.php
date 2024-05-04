<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class TrashController extends Controller
{
    public function trashlist()
    {
        $trashedEmployees = Employee::onlyTrashed()->get();
        return view('trashed.employees', compact('trashedEmployees'));
    }
    public function forceDelete($id)
    {
        $employee = Employee::withTrashed()->findOrFail($id);
        $employee->forceDelete();

        return redirect()->back()->with('success', 'Employee permanently deleted.');
    }
}
