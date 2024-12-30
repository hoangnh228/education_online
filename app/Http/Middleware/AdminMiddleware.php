<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            Log::info('User authenticated', ['user_id' => Auth::user()->id, 'role' => Auth::user()->role]);
            if (Auth::user()->role == 'admin') {
                return $next($request);
            } else {
                Log::warning('Non-admin user attempted to access admin route', ['user_id' => Auth::user()->id]);
                return redirect('/');
            }
        } else {
            Log::warning('Unauthenticated user attempted to access admin route');
            return redirect('/');
        }
    }
}