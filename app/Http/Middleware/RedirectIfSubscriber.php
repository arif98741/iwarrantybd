<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfSubscriber
{
	
	public function handle($request, Closure $next, $guard = 'subscriber')
	{
	    if (Auth::guard($guard)->check()) {
	        return redirect('/claim-request');
	    }

	    return $next($request);
	}
}