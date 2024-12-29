@extends('teacher.layouts.app')

@section('title', 'Teacher - Edit Course')

@section('content')
    <div class="container mt-4">
        <h1>Edit Course</h1>
        <form action="{{ route('teacher.courses.update', $course['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Course Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $course['title'] }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="teacher_name" class="form-label">Teacher Name</label>
                <input type="text" class="form-control" id="teacher_name" name="teacher_name"
                    value="{{ $course['teacher_name'] }}" required>
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
            <button type="submit" class="btn btn-primary">Update Course</button>
        </form>
    </div>
@endsection
