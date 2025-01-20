@extends('admin.layouts.app')

@section('title', 'Admin - Create Video')

@section('content')
    <div class="container mt-4">
        <h1>Add New Video</h1>
        <form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="course_id" class="form-label">Course Name</label>
                <select class="form-select" id="course_id" name="course_id" required>
                    <option value="">-- Select Course --</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="video_name" class="form-label">Video Name</label>
                <input type="text" class="form-control" id="video_name" name="video_name" required>
            </div>
            <div class="mb-3">
                <label for="teacher_id" class="form-label">Teacher Name</label>
                <select class="form-select" id="teacher_id" name="teacher_id" required>
                    <option value="">-- Select Teacher --</option>
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->full_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration (hours)</label>
                <input type="number" class="form-control" id="duration" name="duration" required>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Video URL</label>
                <input type="file" class="form-control" id="url" name="url" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Video</button>
        </form>
    </div>
@endsection
