<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Tutor
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
        if( auth()->user() && auth()->user()->role=='tutor')
        {
            return $next($request);
        }

        notify()->success('logout successfull');

      return redirect()->route('web.home');
    }
}
