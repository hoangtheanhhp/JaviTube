<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class CheckAdmin
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
        if (Auth::user()===null){
            // abort('403');
            return redirect()->back();
        }
        if(!Auth::user()->isAdmin()){
            return redirect()->back();
            // abort('403');
        }
        return $next($request);
    }
}
