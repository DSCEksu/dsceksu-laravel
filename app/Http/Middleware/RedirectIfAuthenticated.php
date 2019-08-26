<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
          if(auth()->user()->hasRole('lead')) {
            return redirect('/lead/dashboard');
          } elseif(auth()->user()->hasRole('techcore')) {
            return redirect('/techcore/dashboard');
          } elseif (auth()->user()->hasRole('nontechcore')) {
            return redirect('/nontechcore/dashboard');
          } else {
            return redirect('/member/dashboard');
          }
        }

        return $next($request);
    }
}
