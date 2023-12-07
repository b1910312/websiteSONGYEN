<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class NguoiDungMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = 'nd')
    {
        if (!Auth::guard($guard)->check()) {
            return response()->json([
                'error' => 'Unauthorized'
            ], 401);
        }
        $user = Auth::guard($guard)->user();

        if ($user && $user->status === 0) {

            return response()->json([
                'error' => 'Lock Account'
            ], 403);
        }

        return $next($request);
    }
}
