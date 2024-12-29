@extends('teacher.layouts.app')

@section('title', 'Teacher Dashboard')

@section('content')
    <div class="container mt-4">
        <h1>Welcome to the Teacher Dashboard</h1>
        <p>Here you can manage your courses and videos.</p>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Your Courses</h2>
            <a href="{{ route('teacher.courses.create') }}" class="btn btn-primary">Add New Course</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fake data for demonstration purposes -->
                <tr>
                    <td>Course 1</td>
                    <td>This is a description of Course 1.</td>
                    <td>10 hours</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Update</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Course 2</td>
                    <td>This is a description of Course 2.</td>
                    <td>20 hours</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Update</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Your Videos</h2>
            <a href="#" class="btn btn-primary">Add New Video</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Video Name</th>
                    <th>Duration</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fake data for demonstration purposes -->
                <tr>
                    <td>Course 1</td>
                    <td>Video 1</td>
                    <td>1 hour</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Update</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Course 2</td>
                    <td>Video 2</td>
                    <td>2 hours</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Update</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
