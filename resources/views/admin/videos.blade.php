@extends('admin.layouts.app')

@section('title', 'Admin - Videos')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manage Videos</h1>
            <a href="{{ route('admin.videos.create') }}" class="btn btn-primary">Add New Video</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Video Name</th>
                    <th>Teacher Name</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>URL</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fake data for demonstration purposes -->
                <tr>
                    <td>Course 1</td>
                    <td>Video 1</td>
                    <td>Teacher 1</td>
                    <td>This is a description of Video 1.</td>
                    <td>1 hour</td>
                    <td><a href="https://example.com/video1.mp4">View</a></td>
                    <td>2024-01-01</td>
                    <td>2024-01-02</td>
                    <td>
                        <a href="{{ route('admin.videos.edit', 1) }}" class="btn btn-sm btn-warning">Update</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Course 2</td>
                    <td>Video 2</td>
                    <td>Teacher 2</td>
                    <td>This is a description of Video 2.</td>
                    <td>2 hours</td>
                    <td><a href="https://example.com/video2.mp4">View</a></td>
                    <td>2024-02-01</td>
                    <td>2024-02-02</td>
                    <td>
                        <a href="{{ route('admin.videos.edit', 2) }}" class="btn btn-sm btn-warning">Update</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
