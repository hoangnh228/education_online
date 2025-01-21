@extends('admin.layouts.app')

@section('title', 'Admin - Reviews')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manage Reviews</h1>
        </div>

        <!-- Search Form -->
        <form method="GET" action="{{ route('admin.reviews') }}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by user or course name" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Course Name</th>
                    <th>Review</th>
                    <th>Rating</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <td>{{ $review->user->user_name }}</td>
                        <td>{{ $review->course->course_name }}</td>
                        <td>{{ $review->review }}</td>
                        <td>{{ $review->rating }}</td>
                        <td>{{ $review->created_at }}</td>
                        <td>
                            <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <nav>
                <ul class="pagination">
                    <li class="page-item {{ $reviews->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $reviews->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    @foreach ($reviews->getUrlRange(1, $reviews->lastPage()) as $page => $url)
                        <li class="page-item {{ $reviews->currentPage() == $page ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    <li class="page-item {{ $reviews->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $reviews->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
               
