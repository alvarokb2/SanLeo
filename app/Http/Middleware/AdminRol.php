<?php

namespace Sanleo\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminRol
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
        if($user->rol == 'admin'){
            return $next($request);
        }
        return redirect('home');
    }
}
