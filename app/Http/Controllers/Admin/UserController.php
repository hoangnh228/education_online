<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // Display a paginate list of users
    public function index(Request $request)
    {
        if ($request->has('search')) {
            return $this->search($request);
        }

        $users = User::orderBy('full_name', 'asc')->paginate(10);
        return view('admin.users', compact('users'));
    }

    // Search user by full name
    public function search(Request $request)
    {
        $search = $request->input('search');

        $users = User::where('full_name', 'LIKE', '%' . $search . '%')
            ->orderBy('full_name', 'asc')
            ->paginate(10);

        $users->appends(['search' => $search]);

        return view('admin.users', compact('users'));
    }

    // Show form create users
    public function create()
    {
        return view('admin.create-user');
    }

    // Save new user
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'user_name' => 'required|string|max:255|unique:users,user_name',
            'dob' => 'required|date',
            'address' => 'required|string|max:500',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:admin,teacher,student',
            'password' => 'required|string|min:8|confirmed',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('profile_images', 'public')
            : null;

        User::create([
            'full_name' => $request->full_name,
            'user_name' => $request->user_name,
            'dob' => $request->dob,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
            'image' => $imagePath,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.users')->with('success', 'User added successfully!');
    }

    // Show the form for editing users
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit-user', compact('user'));
    }

    // Update users in storage
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'user_name' => 'required|string|max:255|unique:users,user_name,' . $id,
            'dob' => 'required|date',
            'address' => 'required|string|max:500',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|in:admin,teacher,student',
            'password' => 'nullable|string|min:8|confirmed',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $user->image = $imagePath;
        }

        $user->update([
            'full_name' => $request->full_name,
            'user_name' => $request->user_name,
            'dob' => $request->dob,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.users')->with('success', 'User updated successfully!');
    }

    // Soft delete a user by setting status to 0.
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('admin.users')->with('error', 'User not found.');
        }

        $user->status = 0;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User has been deactivated successfully.');
    }
}
