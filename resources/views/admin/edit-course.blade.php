@extends('admin.layouts.app')

@section('title', 'Admin - Edit Course')

@section('content')
    <div class="container mt-4">
        <h1>Edit Course</h1>
        <form action="{{ route('admin.courses.update', $course['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $course['title'] }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="teacher" class="form-label">Name of Teacher</label>
                <input type="text" class="form-control" id="teacher" name="teacher" value="{{ $course['teacher'] }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $course['description'] }}</textarea>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration" value="{{ $course['duration'] }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="created_at" class="form-label">Created At</label>
                <input type="text" class="form-control" id="created_at" name="created_at"
                    value="{{ $course['created_at'] }}" readonly>
            </div>
            <div class="mb-3">
                <label for="updated_at" class="form-label">Updated At</label>
                <input type="text" class="form-control" id="updated_at" name="updated_at"
                    value="{{ $course['updated_at'] }}" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
    </div>
@endsection
