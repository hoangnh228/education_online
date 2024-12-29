@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <!-- Dropdown Row -->
    <div class="row mb-3 custom-hover-menu">
        <div class="col">
            <div class="menu-item">
                <span class="menu-title">Development</span>
                <div class="menu-options">
                    <span class="menu-option">Microsoft</span>
                    <span class="menu-option">Apple</span>
                    <span class="menu-option">Google</span>
                    <span class="menu-option">SAP</span>
                    <span class="menu-option">Oracle</span>
                    <span class="menu-option">Other</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="menu-item">
                <span class="menu-title">Business</span>
                <div class="menu-options">
                    <span class="menu-option">Option 1</span>
                    <span class="menu-option">Option 2</span>
                    <span class="menu-option">Option 3</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="menu-item">
                <span class="menu-title">Finance & Accounting</span>
                <div class="menu-options">
                    <span class="menu-option">Option A</span>
                    <span class="menu-option">Option B</span>
                    <span class="menu-option">Option C</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Slideshow -->
    <div id="carouselExampleControls" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/test.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/test.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/test.jpg') }}" class="d-block w-100" alt="...">
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
@endsection
