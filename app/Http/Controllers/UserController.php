<?php

namespace App\Http\Controllers;

use App\Mail\NewUserMail;
use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Mail;

class UserController extends Controller
{
    public function index()
    {
        $roles = Role::get();
        $companies = Company::get();
        $users=User::paginate(50);
        return view('users.index', compact('users', 'roles', 'companies'));
    }
    public function create()
    {
        $roles = Role::get();
        $companies=Company::get();
        
        return view('users.create', compact('roles', 'companies'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);

        $password = 'NexHRM#'. \Str::password(16, true, true, false, false);

        DB::beginTransaction();

        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            // $user->role_id = $request->role;
            // $user->password = Hash::make($request->password);
            $user->password = Hash::make($password);
            $user->company_id = $request->company;
            if ($request->hasFile('user_image')) {
                $user_image = $request->user_image;
                $extension = $user_image->getClientOriginalExtension();
                $fileName = $user->id . '.' . $extension;
                $user_image->move(public_path("uploads/users"), $fileName);
                $user->user_image = $fileName;
                
            }

            $user->save();
            $userRole = Role::where('id', $request->role)->first();
            $user->roles()->attach($userRole);

            DB::commit();
                
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'password' => $password,
            ];

            $email = new NewUserMail($data);
            $email->userData = $data;
            \Mail::to($user->email)->send($email);


            return response()->json(['message' => 'User created successfully', 'status' => 200], 200 );
            
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
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
