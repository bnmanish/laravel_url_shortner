<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (! auth()->check()) {
            abort(403, 'You are not authorized to access this page.');
        }

        if (! in_array(auth()->user()->role, $roles)) {
            abort(403, 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}
