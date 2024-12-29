@extends('admin.layouts.app')

@section('title', 'Admin - Edit Video')

@section('content')
    <div class="container mt-4">
        <h1>Edit Video</h1>
        <form action="{{ route('admin.videos.update', $video['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="course" class="form-label">Course Name</label>
                <select class="form-select" id="course" name="course" required>
                    <option value="Course 1" {{ $video['course'] == 'Course 1' ? 'selected' : '' }}>Course 1</option>
                    <option value="Course 2" {{ $video['course'] == 'Course 2' ? 'selected' : '' }}>Course 2</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Video Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $video['name'] }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="teacher" class="form-label">Teacher Name</label>
                <input type="text" class="form-control" id="teacher" name="teacher" value="{{ $video['teacher'] }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $video['description'] }}</textarea>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration" value="{{ $video['duration'] }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Video URL</label>
                <input type="file" class="form-control" id="url" name="url" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Video</button>
        </form>
    </div>
@endsection
