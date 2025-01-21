@extends('admin.layouts.app')

@section('title', 'Admin - Courses')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manage Courses</h1>
            <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">Add New Course</a>
        </div>

        <form method="GET" action="{{route('admin.courses')}}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search name course" value="{{request('search')}}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form> 

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Name of Teacher</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Duration</th>
                    <th>Created_at</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr> 
                    <td>{{ $course->id}}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ optional($course->teacher)->full_name ?? 'N/A' }}</td>
                    <td>{{ optional($course->category)->category_name ?? 'N/A'}}</td>
                    <td>{{ $course->price}}</td>
                    <td>{{ $course->duration }} hours</td> 
                    <td>{{ $course->created_at->format('Y-m-d') }}</td> 
                    <td>{{ $course->status}}</td>
                    <td>
                        <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-sm btn-warning">Update</a> 
                        <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to deactivate this course?')">Delete</button>
                        </form>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <nav>
                <ul class="pagination">
                    <li class="page-item {{ $courses->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $courses->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    @foreach ($courses->getUrlRange(1, $courses->lastPage()) as $page => $url)
                        <li class="page-item {{ $courses->currentPage() == $page ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    <li class="page-item {{ $courses->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $courses->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
