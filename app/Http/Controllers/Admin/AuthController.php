<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // check data
        // dd($request->all());

        $request->validate([
            'user_name' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::attempt(['user_name' => $request->user_name, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            Auth::logout();
            return redirect()->back()->withErrors(['error' => 'You do not have admin access.']);
        }

        return redirect()->back()->withErrors(['error' => 'Invalid credentials.']);
    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
