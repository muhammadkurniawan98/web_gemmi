<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserFilter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()){
            if(auth()->user()->admin){
                abort(404);
            }
        }
        else{
            return route('login');
        }
        return $next($request);
    }
}
