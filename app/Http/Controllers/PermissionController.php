<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\Validator;
use DataTables, Auth;

class PermissionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the roles page
     *
     */
    public function index()
    {
        try {
            $roles = Role::pluck('label', 'name', 'id');
            return view('permission', compact('roles'));
        } catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }


    public function edit(Request $request, $id)
    {

        $role = Role::find($id);
        // if($role->name=='superadmin'){
        //     return redirect('/roles');
        // }
        // if (!userCan('role.change-permission')) {
        //     return view('unauthorized.unauthorized401');
        // }
        $existingPermissionsIds = [];

        $permissions =  Permission::get();
        $categoriWisePermission =  Permission::get()->groupBy('category');

        $existingPermissions = $role->permissions;
        foreach ($existingPermissions as $existingPermission) {
            $existingPermissionsIds[] =  $existingPermission->id;
        }
        return view('roles.permission', compact('role', 'permissions', 'existingPermissionsIds', 'categoriWisePermission'));
    }



    public function update(Request $request, $roleId)
    {
        $role = Role::find($roleId);
        $role->permissions()->detach();
        $role->permissions()->attach($request->permissionId);
        return redirect('/roles');
    }
}
