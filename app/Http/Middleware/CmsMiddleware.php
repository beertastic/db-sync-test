<?php

namespace App\Http\Middleware;

use Closure;

class CmsMiddleware
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
        if (1 != 1) {
            return redirect('/');
        }
        return $next($request);
    }
}
