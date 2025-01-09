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

            // Sử dụng is_admin
            if ($user->is_admin) {
                return redirect()->route('admin.dashboard');
            }

            Auth::logout();

            $statusMessages = [
                0 => 'Your account is inactive. Please contact support.',
                2 => 'Your account is pending approval. Please wait for activation.',
            ];
            return redirect()->back()->withErrors(['error' => $statusMessages[$user->status] ?? 'Invalid account status.']);
        }

        return redirect()->back()->withErrors(['error' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
