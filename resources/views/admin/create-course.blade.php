@extends('admin.layouts.app')

@section('title', 'Admin - Create Course')

@section('content')
    <div class="container mt-4">
        <h1>Create New Course</h1>
        <form action="{{ route('admin.courses.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="teacher" class="form-label">Name of Teacher</label>
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
            <button type="submit" class="btn btn-primary">Create Course</button>
        </form>
    </div>
@endsection
