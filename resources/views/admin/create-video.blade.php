@extends('admin.layouts.app')

@section('title', 'Create Video')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-4 text-center">Create New Video</h1>
            <form method="POST" action="{{ route('admin.videos.store') }}" enctype="multipart/form-data">
                @csrf
                <!-- Video Name -->
                <div class="mb-3">
                    <label for="video_name" class="form-label">Video Name</label>
                    <input type="text" name="video_name" id="video_name" class="form-control" value="{{ old('video_name') }}" placeholder="Enter video name" required>
                    @error('video_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Course Selection -->
                <div class="mb-3">
                    <label for="course_id" class="form-label">Course</label>
                    <select name="course_id" id="course_id" class="form-select" required>
                        <option value="">-- Select Course --</option>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
                                {{ $course->course_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('course_id') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Teacher Selection -->
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
                    @error('teacher_id') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Enter a brief description" required>{{ old('description') }}</textarea>
                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Duration -->
                <div class="mb-3">
                    <label for="duration" class="form-label">Duration (minutes)</label>
                    <input type="number" name="duration" id="duration" class="form-control" value="{{ old('duration') }}" placeholder="Enter video duration" required>
                    @error('duration') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Video Upload -->
                <div class="mb-3">
                    <label for="video_file" class="form-label">Upload Video</label>
                    <input type="file" name="video_file" id="video_file" class="form-control" accept="video/*" required>
                    @error('video_file') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Create Video</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
