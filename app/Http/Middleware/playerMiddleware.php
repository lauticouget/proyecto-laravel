<?php

namespace App\Http\Middleware;

use Closure;

class playerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->type != 'player'){
    
            return new Response(view('unauthorized')->with('role', 'PLAYER'));
        }
            return $next($request);
    }
}