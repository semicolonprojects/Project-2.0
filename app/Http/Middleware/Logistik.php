<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Logistik
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role == 'logistik' || auth()->user()->role == 'superadmin' || auth()->user()->role == 'logistikrendra') {
            return $next($request);
        }

        abort(403);
    }
}
