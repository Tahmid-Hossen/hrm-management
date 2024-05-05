<?php
use Illuminate\Support\Facades\Auth;
if (!function_exists('userCan')) {
    function userCan($permission)
    {
        return auth()->check() && auth()->user()->permissions->pluck('name')->contains($permission);
    }
}
function getUserRole($option = 'name') {
    // Check if user is authenticated
    if (Auth::check()) {
        $user = Auth::user();
        // Check if the user has a role
        if ($user->role) {
            $role = $user->role;
            // Return role information based on the requested option
            switch ($option) {
                case 'id':
                    return $role->id;
                    break;
                case 'name':
                    return $role->name;
                    break;
                case 'slug':
                    return $role->slug;
                    break;
                case 'created_by':
                    return $role->created_by;
                    break;
                // Add more cases for other options as needed
                default:
                    return null;
                    break;
            }
        } else {
            // Handle case where user does not have a role
            return null;
        }
    } else {
        // Handle case where user is not authenticated
        return null;
    }
}
function getAssetVersion(){
    return $version="v1.00";
}
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
function getRole($req='name'){
    if(isset(\Illuminate\Support\Facades\Auth::user()->roles[0]->$req)){
        $role=\Illuminate\Support\Facades\Auth::user()->roles[0]->$req;
    }else{
        $role='N/A';
    }
    return strtolower($role);
}
function inputClass($section="common"){
    $class="";
    if($section=="change-password"){
        $class='w-full border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-[#029397]';
    }elseif($section=="small"){
        $class='w-full border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-[#029397]';
    }elseif($section=="label"){
        $class='block text-gray-700 text-sm font-bold mb-2';
    }elseif($section=="error_text"){
        $class='text-red-600 text-sm font-medium';
    }else{
        $class='w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-[#029397]';
    }
    return $class;
}

function strongPasswordGenerator( $length = 12 ) {
    return "N3x@".generateRandomString($length-4);
}





?>


