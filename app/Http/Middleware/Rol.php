<?php

namespace App\Http\Middleware;

use Closure;

class Rol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rol)
    {
        $user = auth()->user();

        if ($user->rol == 'admin') {
            if ($user->rol != $rol ) {
                abort(404);
            }
        }
        if ($user->rol == 'delivery') {
            if ($user->rol != $rol ) {
                abort(404);
            }
        }

        return $next($request);
    }
}
