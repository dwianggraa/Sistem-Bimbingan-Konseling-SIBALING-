<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        // if (in_array($request->user()->level, $levels)) {
        //     return $next($request);
        // }
        // if (Auth::user()->level == 'guest') {
        //     return Redirect::to('dashboard-guest');
        // }

        // if (Auth::user()->level == 'admin') {
        //     return Redirect::to('dashboard-admin');
        // }
    }
}
