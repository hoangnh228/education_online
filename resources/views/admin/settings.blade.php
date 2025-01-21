@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>Profile Settings</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Full Name -->
        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $user->full_name }}" required>
            @error('full_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- User Name -->
        <div class="mb-3">
            <label for="user_name" class="form-label">User Name</label>
            <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $user->user_name }}" required>
            @error('user_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Leave blank to keep current password">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <!-- Profile Image -->
        <div class="mb-3">
            <label for="image" class="form-label">Profile Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @if ($user->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Image" width="100">
                </div>
            @endif
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection
