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




$key = "SJDGJG*#&^R";
function aesEnc($string){
    $ciphering = "AES-128-CTR";

    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;

    $encryption_iv = '5V6@e#9Z1I2$3%78';
    global $key;
    $encryption = openssl_encrypt($string, $ciphering, $key, $options, $encryption_iv);
    return $encryption;
}
function aesDec($string){
    $ciphering = "AES-128-CTR";

    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $decryption_iv = '5V6@e#9Z1I2$3%78';
    global $key;
    $decryption=openssl_decrypt ($string, $ciphering,
        $key, $options, $decryption_iv);
    return $decryption;
}




?>
