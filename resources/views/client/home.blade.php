@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <!-- Slideshow -->
    <div id="carouselExampleControls" class="carousel slide mb-4" data-bs-ride="carousel" style="max-height: 300px; overflow: hidden;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/test.jpg') }}" class="d-block w-100" alt="..." style="height: 100%; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/test.jpg') }}" class="d-block w-100" alt="..." style="height: 100%; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/test.jpg') }}" class="d-block w-100" alt="..." style="height: 100%; object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    

    <!-- Highly Rated Courses -->
    <div class="container mb-4">
        <h3 class="mb-3 d-flex justify-content-between align-items-center">
            Highly Rated Courses
            <a href="{{ route('courses') }}" class="btn btn-link">See More</a>
        </h3>
        <div class="row">
            @foreach (range(1, 4) as $i)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('image/highly-rated.jpg') }}" class="card-img-top" alt="Highly Rated Course">
                        <div class="card-body">
                            <h5 class="card-title">Top Course {{ $i }}</h5>
                            <p class="card-text">By Expert {{ $i }}</p>
                            <p class="card-text"><i class="bi bi-star-fill"></i> 4.9 (1500+ ratings)</p>
                            <p class="card-text">$49.99</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    

    <div class="container my-5">
        <h3 class="text-center mb-4 d-flex justify-content-between align-items-center">
            Top Rated Teachers
            <a href="#" class="btn btn-link">See More</a>
        </h3>
        <div class="row">
            @foreach (range(1, 4) as $i)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('image/teacher.jpg') }}" class="card-img-top" alt="Teacher Image">
                        <div class="card-body text-center">
                            <h5 class="card-title">Teacher {{ $i }}</h5>
                            <p class="card-text"><i class="bi bi-star-fill text-warning"></i> 4.8 (200 Reviews)</p>
                            <a href="#" class="btn btn-primary btn-sm">View Profile</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Course Cards -->
    <div id="courseCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach (array_chunk(range(0, 9), 4) as $chunkIndex => $chunk)
                <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach ($chunk as $i)
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <img src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Course Image">
                                    <div class="card-body">
                                        <h5 class="card-title" hreft>Course Title</h5>
                                        <p class="card-text">Author Name</p>
                                        <p class="card-text"><i class="bi bi-star-fill"></i> 4.5 (1000)</p>
                                        <p class="card-text">$99.99</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#courseCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#courseCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="text-end mt-3">
        <a href="{{ route('courses') }}" class="btn btn-link">See More Courses</a>
    </div>
@endsection
