<?php

namespace App\Http\Middleware;

use Closure;

class TrabajadorMiddleware
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
        if((auth()->user()->tipo==1 || auth()->user()->tipo==1) && auth()->user()->estado==1){
            return $next($request);
        }
        return redirect('/admin/sin-permiso');
    }
}
