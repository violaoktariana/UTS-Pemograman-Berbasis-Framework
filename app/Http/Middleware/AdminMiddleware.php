<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            // Parse and validate the token
            $user = JWTAuth::parseToken()->authenticate();

            if ($user && $user->role == 'admin') {
                return $next($request);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Unauthorized'
                ], 401);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized'
            ], 401);
        }
    }
}
