<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles=Role::withCount('users')->paginate(10);
        return view('roles.index', compact('roles'));
    }
    public function create()
    {
        $roles=Role::get();
        return view('roles.create', compact('roles'));
    }
    public function store(Request $request)
    {
        return $request;
    }
    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }
    public function changePermission($id)
    {

        return $role=Role::find($id);
    }
    public function delete()
    {

    }
    public function forceDelete()
    {

    }
    public function restore()
    {

    }

}
