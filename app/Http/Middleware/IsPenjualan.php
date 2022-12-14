<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsPenjualan
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
        if (Auth::check() && Auth::user()->role == '1') {
            return redirect()->route('operasional');
        }elseif (Auth::check() && Auth::user()->role == '3') {
            return redirect()->route('owner');
        }else
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
