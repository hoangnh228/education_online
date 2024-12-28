@extends('admin.layouts.app')

@section('title', 'Admin - Courses')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manage Courses</h1>
            <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">Add New Course</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Name of Teacher</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fake data for demonstration purposes -->
                <tr>
                    <td>Course 1</td>
                    <td>Teacher 1</td>
                    <td>This is a description of Course 1.</td>
                    <td>10 hours</td>
                    <td>2024-01-01</td>
                    <td>2024-01-02</td>
                    <td>
                        <a href="{{ route('admin.courses.edit', 1) }}" class="btn btn-sm btn-warning">Update</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Course 2</td>
                    <td>Teacher 2</td>
                    <td>This is a description of Course 2.</td>
                    <td>20 hours</td>
                    <td>2024-02-01</td>
                    <td>2024-02-02</td>
                    <td>
                        <a href="{{ route('admin.courses.edit', 2) }}" class="btn btn-sm btn-warning">Update</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
