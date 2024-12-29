@extends('admin.layouts.app')

@section('title', 'Admin - Create Video')

@section('content')
    <div class="container mt-4">
        <h1>Add New Video</h1>
        <form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="course" class="form-label">Course Name</label>
                <select class="form-select" id="course" name="course" required>
                    <option value="Course 1">Course 1</option>
                    <option value="Course 2">Course 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Video Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="teacher" class="form-label">Teacher Name</label>
                <input type="text" class="form-control" id="teacher" name="teacher" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration" required>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Video URL</label>
                <input type="file" class="form-control" id="url" name="url" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Video</button>
        </form>
    </div>
@endsection
