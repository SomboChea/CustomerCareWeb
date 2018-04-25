<?php

namespace App\Http\Middleware;

use Closure;

class testmiddleware
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
        // echo "middel";
        return $next($request);
        //return $next($request);
    }
}
