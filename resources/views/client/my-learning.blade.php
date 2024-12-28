@extends('layouts.app')

@section('title', 'My Learning')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">My Learning</h1>
        <div class="row">
            <!-- Course Card 1 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100" onclick="window.location.href='{{ route('watch') }}'">
                    <img src="path/to/course.jpg" class="card-img-top" alt="Course Image">
                    <div class="card-body">
                        <h5 class="card-title">Synthetic Data in Machine Learning</h5>
                        <p class="card-text">By Aditi Godbole</p>
                        <p class="card-text"><i class="bi bi-star-fill text-warning"></i> 4.8 (123 ratings)</p>
                        <button class="btn btn-primary w-100">START COURSE</button>
                    </div>
                </div>
            </div>
            <!-- Course Card 2 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100" onclick="window.location.href='{{ route('watch') }}'">
                    <img src="path/to/course.jpg" class="card-img-top" alt="Course Image">
                    <div class="card-body">
                        <h5 class="card-title">How to Create an Online Course: The Official Udemy...</h5>
                        <p class="card-text">By Udemy Instructor Team</p>
                        <p class="card-text"><i class="bi bi-star-fill text-warning"></i> 4.5 (98 ratings)</p>
                        <button class="btn btn-primary w-100">START COURSE</button>
                    </div>
                </div>
            </div>
            <!-- Course Card 3 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100" onclick="window.location.href='{{ route('watch') }}'">
                    <img src="path/to/course.jpg" class="card-img-top" alt="Course Image">
                    <div class="card-body">
                        <h5 class="card-title">Advanced Python Programming</h5>
                        <p class="card-text">By John Doe</p>
                        <p class="card-text"><i class="bi bi-star-fill text-warning"></i> 4.7 (150 ratings)</p>
                        <button class="btn btn-primary w-100">START COURSE</button>
                    </div>
                </div>
            </div>
            <!-- Course Card 4 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100" onclick="window.location.href='{{ route('watch') }}'">
                    <img src="path/to/course.jpg" class="card-img-top" alt="Course Image">
                    <div class="card-body">
                        <h5 class="card-title">Introduction to Data Science</h5>
                        <p class="card-text">By Jane Smith</p>
                        <p class="card-text"><i class="bi bi-star-fill text-warning"></i> 4.6 (200 ratings)</p>
                        <button class="btn btn-primary w-100">START COURSE</button>
                    </div>
                </div>
            </div>
            <!-- Course Card 5 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100" onclick="window.location.href='{{ route('watch') }}'">
                    <img src="path/to/course.jpg" class="card-img-top" alt="Course Image">
                    <div class="card-body">
                        <h5 class="card-title">Machine Learning Basics</h5>
                        <p class="card-text">By Emily Johnson</p>
                        <p class="card-text"><i class="bi bi-star-fill text-warning"></i> 4.8 (110 ratings)</p>
                        <button class="btn btn-primary w-100">START COURSE</button>
                    </div>
                </div>
            </div>
            <!-- Course Card 6 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100" onclick="window.location.href='{{ route('watch') }}'">
                    <img src="path/to/course.jpg" class="card-img-top" alt="Course Image">
                    <div class="card-body">
                        <h5 class="card-title">Deep Learning Fundamentals</h5>
                        <p class="card-text">By Michael Brown</p>
                        <p class="card-text"><i class="bi bi-star-fill text-warning"></i> 4.9 (140 ratings)</p>
                        <button class="btn btn-primary w-100">START COURSE</button>
                    </div>
                </div>
            </div>
            <!-- Course Card 7 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100" onclick="window.location.href='{{ route('watch') }}'">
                    <img src="path/to/course.jpg" class="card-img-top" alt="Course Image">
                    <div class="card-body">
                        <h5 class="card-title">Natural Language Processing with Python</h5>
                        <p class="card-text">By Sarah Lee</p>
                        <p class="card-text"><i class="bi bi-star-fill text-warning"></i> 4.7 (130 ratings)</p>
                        <button class="btn btn-primary w-100">START COURSE</button>
                    </div>
                </div>
            </div>
            <!-- Course Card 8 -->
            <div class="col-md-3 mb-4">
                <div class="card h-100" onclick="window.location.href='{{ route('watch') }}'">
                    <img src="path/to/course.jpg" class="card-img-top" alt="Course Image">
                    <div class="card-body">
                        <h5 class="card-title">Computer Vision with OpenCV</h5>
                        <p class="card-text">By Kevin Adams</p>
                        <p class="card-text"><i class="bi bi-star-fill text-warning"></i> 4.8 (120 ratings)</p>
                        <button class="btn btn-primary w-100">START COURSE</button>
                    </div>
                </div>
            </div>
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
