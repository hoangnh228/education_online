@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 d-flex align-items-center">
                <img src="{{ asset('image/test.jpg') }}" class="img-fluid" alt="Sample Image">
            </div>
            <div class="col-md-6">
                <h2>Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

                @if (session('error'))
                    <div>{{ session('error') }}</div>
                @endif

                <p class="mt-3">Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
            </div>
        </div>
    </div>
@endsection
