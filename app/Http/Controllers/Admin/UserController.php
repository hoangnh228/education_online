<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Common validation rules
    private $rules = [
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
    ];

    // Display a paginated list of users with optional search
    public function index(Request $request)
    {
        $query = User::query();

        if ($request->filled('search')) {
            $query->where('full_name', 'LIKE', '%' . $request->input('search') . '%');
        }

        $users = $query->orderBy('full_name')
            ->paginate(10)
            ->appends($request->only('search'));

        return view('admin.users', compact('users'));
    }

    // Show the form to create a new user
    public function create()
    {
        return view('admin.create-user');
    }

    // Save a new user to the database
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->rules);

        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('profile_images', 'public')
            : null;

        User::create(array_merge($validatedData, ['image' => $imagePath]));

        return redirect()->route('admin.users')->with('success', 'User added successfully!');
    }

    // Show the form to edit a user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit-user', compact('user'));
    }

    // Update a user in the database
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Adjust validation rules for unique fields
        $this->rules['user_name'] .= ',' . $id;
        $this->rules['email'] .= ',' . $id;

        // Change password rule to nullable
        $this->rules['password'] = 'nullable|string|min:8|confirmed';

        $validatedData = $request->validate($this->rules);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('profile_images', 'public');
        }

        $user->update(array_filter($validatedData));

        return redirect()->route('admin.users')->with('success', 'User updated successfully!');
    }

    // Soft delete a user by setting status to 0
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('admin.users')->with('error', 'User not found.');
        }

        $user->update(['status' => 0]);

        return redirect()->route('admin.users')->with('success', 'User has been deactivated successfully.');
    }
}
