<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Auth;

class AuthAdministrator
{
    /**
     * Adminstrator Middleware.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guest() or Auth::user()->role != 1) {
            return Redirect::guest('/');
        }

        return $next($request);
    }
}
