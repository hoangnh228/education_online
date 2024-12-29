@extends('teacher.layouts.app')

@section('title', 'Teacher - View Course')

@section('content')
    <div class="container mt-4">
        <h1>Course Title 1</h1>
        <p><strong>Teacher:</strong> Teacher Name</p>
        <p><strong>Description:</strong> This is a detailed description of the course.</p>
        <p><strong>Duration:</strong> 10 hours</p>
        <p><strong>Created at:</strong> 2024-01-01</p>
        <p><strong>Updated at:</strong> 2024-01-02</p>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Course Videos</h2>
            <a href="#" class="btn btn-primary">Add New Video</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Video Name</th>
                    <th>Teacher Name</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>URL</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Video 1</td>
                    <td>Teacher Name</td>
                    <td>This is a description of Video 1.</td>
                    <td>1 hour</td>
                    <td><a href="https://example.com/video1.mp4">View</a></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Update</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Video 2</td>
                    <td>Teacher Name</td>
                    <td>This is a description of Video 2.</td>
                    <td>2 hours</td>
                    <td><a href="https://example.com/video2.mp4">View</a></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Update</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
