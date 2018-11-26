<?php

namespace App\Http\Middleware;

use Closure;

class owner
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
        if ($request->user() && $request->user()->type != 'owner'){

            return redirect('/');
        }
        return $next($request);
    }

    
}
