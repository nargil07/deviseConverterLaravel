<?php

namespace App\Http\Middleware;

use Closure;

class CrossDomain
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
        dd("test");
        return $next($request)
            ->header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With')
            ->header('Access-Control-Allow-Credentials: true')
            ->header('Access-Control-Allow-Origin: *')
            ->header('Access-Control-Allow-Methods : GET, POST, PUT, DELETE, OPTIONS');
    }
}
