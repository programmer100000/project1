<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if(Auth::check() && $user->status_id == 1 && $user->role_id == 1){
            return $next($request);
        }
        else{
            return redirect()->route('admin.login');
        }

    }
}