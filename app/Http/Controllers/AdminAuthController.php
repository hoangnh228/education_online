<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->with('error', 'Only admins can login.');
            }
        }

        return redirect()->route('admin.login')->with('error', 'Invalid credentials.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}