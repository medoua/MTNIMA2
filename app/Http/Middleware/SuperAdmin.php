<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\role_user;
class SuperAdmin
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && (auth()->user()->isSuperAdmin())) {
            return $next($request);
        }
        return back()->with('success_S',"vous n' est pas responsable de ce role (Super Admin)");
        //return response("vous n' est pas responsable de ce role (Super Admin)", 403);
    }

}
