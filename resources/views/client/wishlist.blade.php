@extends('layouts.app')

@section('title', 'Wishlist')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Wishlist</h1>
        <div class="row">
            @for ($i = 0; $i < 12; $i++)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="path/to/course.jpg" class="card-img-top" alt="Course Image">
                        <div class="card-body">
                            <h6 class="card-title">Course Title</h6>
                            <p class="card-text"><small>Instructor Name</small></p>
                            <p class="card-text"><small><i class="bi bi-star-fill"></i> 4.5 (1000)</small></p>
                            <p class="card-text"><small>$99.99</small></p>
                            <a href="#" class="btn btn-link text-danger"><small>Remove</small></a> |
                            <a href="#" class="btn btn-link"><small>Move to Cart</small></a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
@endsection
