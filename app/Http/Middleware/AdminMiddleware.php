<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role === 'admin' && $user->status === 1) {
                return $next($request);
            }

            if ($user->role === 'admin' && $user->status !== 1) {
                return redirect()->route('admin.login')->withErrors([
                    'error' => 'Your account is not active. Please contact support.'
                ]);
            }
        }

        return redirect()->route('admin.login')->withErrors(['error' => 'Access denied.']);
    }
}
