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
        $request->validate([
            'user_name' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::attempt(['user_name' => $request->user_name, 'password' => $request->password])) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                if ($user->status === 1) {
                    return redirect()->route('admin.dashboard');
                } else {
                    Auth::logout();
                    $statusMessages = [
                        0 => 'Your account is inactive. Please contact support.',
                        2 => 'Your account is pending approval. Please wait for activation.',
                    ];
                    return redirect()->back()->withErrors(['error' => $statusMessages[$user->status] ?? 'Invalid account status.']);
                }
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
