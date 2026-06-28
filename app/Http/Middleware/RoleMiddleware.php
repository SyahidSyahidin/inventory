<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role)
    {
        if ($request->user()->role !== $role) {
            return response()->json([
                'status'  => 'error',
                'data'    => null,
                'message' => 'Forbidden'
            ], 403);
        }

        return $next($request);
    }
}