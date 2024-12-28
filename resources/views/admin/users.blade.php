@extends('admin.layouts.app')

@section('title', 'Admin - Users')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manage Users</h1>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add New User</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Image</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fake data for demonstration purposes -->
                <tr>
                    <td>John Doe</td>
                    <td>john_doe</td>
                    <td>1990-01-01</td>
                    <td>123 Main St, City, Country</td>
                    <td>123-456-7890</td>
                    <td>john@example.com</td>
                    <td>Admin</td>
                    <td><img src="https://via.placeholder.com/50" alt="User Image" height="50"></td>
                    <td>2024-01-01</td>
                    <td>2024-01-02</td>
                    <td>
                        <a href="{{ route('admin.users.edit', 1) }}" class="btn btn-sm btn-warning">Update</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>jane_smith</td>
                    <td>1985-05-15</td>
                    <td>456 Elm St, City, Country</td>
                    <td>987-654-3210</td>
                    <td>jane@example.com</td>
                    <td>User</td>
                    <td><img src="https://via.placeholder.com/50" alt="User Image" height="50"></td>
                    <td>2024-01-10</td>
                    <td>2024-01-11</td>
                    <td>
                        <a href="{{ route('admin.users.edit', 2) }}" class="btn btn-sm btn-warning">Update</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
