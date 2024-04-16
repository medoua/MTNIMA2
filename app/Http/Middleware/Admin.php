<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\role_user;

class Admin
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && (auth()->user()->isAdmin() || auth()->user()->isSuperAdmin())) {
            return $next($request);
        }
        return back()->with('success_S',"vous n' est pas responsable de ce role (Super Admin et Admin)");
        //return response("vous n' est pas responsable de ce role (Super Admin et Admin)", 403);
    }

}
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    //public function handle(Request $request, Closure $next): Response
    //public function handle($request, Closure $next, ...$allowedRoles)
    
/* {
        if (auth()->check()) {
            $userRoles = auth()->user()->roles->pluck('name')->toArray();
    
            foreach ($roles as $role) {
                if (in_array($role, $userRoles)) {
                    return $next($request);
                }
            }
    
            return response('Unauthorized', 403);
        }
    
        return redirect('/login');

        */

       /* $roleUser = role_user::find(1);
        /*if (auth()->check()) {
            // super admin
            if (auth()->user() && auth()->user()->role_userS()->id == 1) {
                return $next($request);
            } else {
                // For non-super admin users, you can return a response or redirect them.
                return response('Unauthorized', 403); // Example: Return a 403 Forbidden response
            }

        }*/

        /*
        if (auth()->check()) {
            // User is authenticated
            $user = auth()->user();
    
            // Check if the user has any of the allowed roles
            foreach ($allowedRoles as $role) {
                if ($user->roles->contains('id', $user->id_role)) {
                    return $next($request);
                }
            }
    
            // User is authenticated but doesn't have any of the allowed roles
            return response('Unauthorized', 403); // Example: Return a 403 Forbidden response
        } else {
            // User is not authenticated
            // Redirect them to the login page
            return redirect('/login');
        }

        // For unauthenticated users, you might want to redirect them to the login page or handle it in a different way.
        //return redirect('/login');

*/

       /* if (auth()->check()) {
            //super admin
            if(auth()->role_user()->role ==1)
            {
                return $next($request);
            }
            else{
                //return $next($request);
            }
        } 
        $user = auth()->user();
        //echo($user->id_role );
        
        if (auth()->check()) {
            // User is authenticated
            $user = auth()->user()->role_users();
    //dd($user );

            // Check if the user has the role with id_role = 1 (Super Admin)
            if ($user->role_users->contains('id', 1)) {
                return $next($request);
                // User is authenticated but doesn't have the required role
                return response('Unauthorized', 403); // Example: Return a 403 Forbidden response
            }
        } else {
            // User is not authenticated
            // Redirect them to the login page
            return redirect('/login');
        }
        
        }*/