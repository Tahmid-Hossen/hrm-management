<?php

namespace App\Http\Middleware\Role;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsSuperAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login'); // Redirect to login if user is not authenticated
        }
        // Get the user's role
        $role = $user->role->slug;
        // Check if the user has the super-admin role
        if ($role == 'super-admin') {
            return $next($request); // Proceed with the request if the user has the super-admin role
        }
        // Return unauthorized response if the user does not have the super-admin role
        return abort(403, 'Unauthorized');
    }
}
