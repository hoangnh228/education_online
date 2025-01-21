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
                    <th>ID</th>
                    <th>Course Name</th>
                    <th>Video Name</th>
                    <th>Teacher Name</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>URL</th>
                    <th>Created At</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                    <tr>
                        <td>{{ $video->id}}</td>
                        <td>{{ $video->course->course_name }}</td>
                        <td>{{ $video->video_name }}</td>
                        <td>{{ $video->teacher->full_name }}</td>
                        <td>{{ $video->description }}</td>
                        <td>{{ $video->duration }} hours</td>
                        <td><a href="{{ $video->url }}" target="_blank">View</a></td>
                        <td>{{ $video->created_at->format('Y-m-d') }}</td>
                        <td>{{ $video->status}}</td>
                        <td>
                            <a href="{{ route('admin.videos.edit', $video->id) }}" class="btn btn-sm btn-warning">Update</a>
                            <form action="{{ route('admin.videos.destroy', $video->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this video?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <nav>
                <ul class="pagination">
                    <li class="page-item {{ $videos->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $videos->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    @foreach ($videos->getUrlRange(1, $videos->lastPage()) as $page => $url)
                        <li class="page-item {{ $videos->currentPage() == $page ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    <li class="page-item {{ $videos->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $videos->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
