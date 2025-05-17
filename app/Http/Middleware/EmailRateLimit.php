<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class EmailRateLimit
{
    public function handle(Request $request, Closure $next)
    {
        $key = $request->ip();

        if (RateLimiter::tooManyAttempts($key, 10)) {
            return response()->json([
                'success' => false,
                'message' => 'Too many email requests. Please try again later.'
            ], 429);
        }

        RateLimiter::hit($key, 60); // 60 seconds decay

        return $next($request);
    }
}
