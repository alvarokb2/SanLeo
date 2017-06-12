<?php

namespace Sanleo\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ApoderadoRol
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

        $user = Auth::user();
        if($user->rol == 'apoderado'){
            return $next($request);
        }
        return redirect('home');
    }
}
