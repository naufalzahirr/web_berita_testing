<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        
        if (in_array(Auth::check() && Auth::user()->role,$roles)) {
            return $next($request);
            
        }

        return redirect('/login')->with('error', 'Access denied. You do not have the required role.');
    }
}
