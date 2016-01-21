<?php

namespace acessoSystem\Http\Middleware;

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

            if (Auth::user()->role === 'client') {
                return redirect()->route('layout.client');
            }elseif (Auth::user()->role === 'admin') {
                return redirect()->route('admin.layout.admin');
            }

        }

        return $next($request);
    }
}
