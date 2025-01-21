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
                <select name="course_id" id="course_id" class="form-select" required>
                    <option value="">-- Select Course --</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
                            {{ $course->course_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Video Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $video['name'] }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="teacher_id" class="form-label">Teacher</label>
                    <select name="teacher_id" id="teacher_id" class="form-select" required>
                        <option value="">-- Select Teacher --</option>
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}" {{ old('teacher_id') == $teacher->id ? 'selected' : '' }}>
                                {{ $teacher->full_name }}
                            </option>
                        @endforeach
                    </select>
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
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ old('status', $video->status) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $video->status) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Video</button>
        </form>
    </div>
@endsection
