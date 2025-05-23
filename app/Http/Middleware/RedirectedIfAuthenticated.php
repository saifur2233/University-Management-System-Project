<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class RedirectedIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {

            # Check if guard is authenticated
            if (Auth::guard($guard)->check()) {

                # Super Admin
                if ($guard === 'superadmin' && Route::is('super-admin.*')) {
                    return redirect()->route('super-admin.dashboard');
                }

                # Admin
                elseif ($guard === 'admin' && Route::is('admin.*')) {
                    return redirect()->route('admin.dashboard');
                }

                # Normal User
                else {
                    return redirect()->route('dashboard');
                }
            }
        }

        return $next($request);
    }
}