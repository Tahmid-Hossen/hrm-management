<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {

        return "Homepage";

        if(userCan('user.view')){
            return 1;
        }else{
            return 0;
        }


        //return $users=User::get();
        //return auth()->user()->permissions->pluck('name')->toArray();

        /*if(auth()->user()->can('')) {
            return 1;
        }else{
            return 2;
        }
        $role = getUserRole('slug');
        switch ($role) {
            case 'super-admin':
                return $this->superAdminHomepage();
                break;
            case 'producer':
                return $this->producerHomepage();
                break;
            default:
                abort(403, 'Unauthorized');
                break;
        }*/
    }

    public function superAdminHomepage()
    {
        return view('homepage.superadmin-index');
    }
    public function producerHomepage()
    {
        return view('homepage.producer-index');
    }

}
