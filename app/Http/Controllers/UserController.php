<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users=User::with('role')->paginate(10);
        return view('users.index', compact('users'));
    }
    public function create()
    {
        $roles=Role::get();
        $companies=Company::get();
        return view('users.create', compact('roles', 'companies'));
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role;
        $user->password = Hash::make($request->password);
        $user->company_id = $request->company;
        if ($user->save()) {
            if ($request->hasFile('user_image')) {
                $user_image = $request->user_image;
                $extension = $user_image->getClientOriginalExtension();
                $fileName = $user->id . '.' . $extension;
                $user_image->move(public_path("uploads/users"), $fileName);
                $user->user_image = $fileName;
                $user->save();
            }
            return redirect()->route('users.index')->with('success', 'User created successfully');
        }
    }
    public function edit($id)
    {
        $user=User::find($id);
        $roles=Role::get();
        $companies=Company::get();
        if($user){
            return view('users.edit', compact('user', 'roles', 'companies'));
        }
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$id,
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role;
        $user->company_id = $request->company;

        if ($request->hasFile('user_image')) {
            $user_image = $request->file('user_image');
            $extension = $user_image->getClientOriginalExtension();
            $fileName = $id . '.' . $extension;
            $user_image->move(public_path("uploads/users"), $fileName);
            $user->user_image = $fileName;
        }
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($user->save()) {
            return redirect()->route('users.index')->with('success', 'User updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update user');
        }
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
