<?php

namespace App\Http\Controllers;

use App\Mail\NewUserMail;
use App\Mail\ResetPasswordMail;
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

        $data =[
            'user' => $user,
            'roles' => $roles,
            'companies' => $companies,
            'user_role' => $user->roles[0]->id
        ];

        return response()->json(['data' => $data, 'message' => 'User created successfully', 'status' => true], 200 );

        // r
        // if($user){
        //     return view('users.edit', compact('user', 'roles', 'companies'));
        // }
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'edituserName' => 'required',
        ]);

         DB::beginTransaction();
        try {
            $user = User::findOrFail($id);
            $user->name = $request->edituserName;
            $user->email = $request->edituserEmail;
 
            $user->company_id = $request->edituserCompany;
            $user->is_active = $request->edituserIsActive;

            $user->save();

            $userRole = Role::where('id', $request->edituserRole)->first();
            $user->roles()->sync($userRole);
            DB::commit();

         } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }
       return response()->json(['data' =>  $user, 'message' => 'User updated successfully', 'status' => true], 201 );
    }

    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User has been deleted');
    }

    public function forceDelete()
    {

    }
    public function restore()
    {

    }

    public function resetPassword($id)
    {
        $password = 'NexHRM#'. \Str::password(16, true, true, false, false);
        $user = User::find($id);
        $user->password = Hash::make($password);
        $user->save();
         $data = [
                'name' => $user->name,
                'email' => $user->email,
                'password' => $password,
        ];
        $email = new ResetPasswordMail($data);
        $email->userData = $data;
        \Mail::to($user->email)->send($email);

         return redirect()->route('users.index')->with('success', 'Password reset successfully');

    }

}
