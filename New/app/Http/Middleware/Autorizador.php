<?php

namespace App\Http\Middleware;

use Closure;

class Autorizador
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
        if(!$request->is('notifymi/login') && \Auth::guest())
        {
            return redirect('/notifymi/login');
        }

        return $next($request);
    }
}
