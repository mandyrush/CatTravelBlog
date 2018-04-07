<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdmin
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
        $user = $request->user();

        if ($user && $user->isAdmin()) {
            // Your an admin now pass go to the route given
            return $next($request);
        }

        // Your not authenticated and/or an admin
        return redirect('/login');
    }
}
