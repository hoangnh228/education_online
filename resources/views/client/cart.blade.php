@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Shopping Cart</h1>
        <div class="row">
            <!-- Danh Sách Khóa Học -->
            <div class="col-md-9">
                @for ($i = 0; $i < 5; $i++)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="path/to/course.jpg" class="img-fluid rounded-start" alt="Course Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h6 class="card-title">Email Etiquette: Write More Effective Emails At Work</h6>
                                    <p class="card-text"><small>By Clare Lynch</small></p>
                                    <p class="card-text"><small><i class="bi bi-star-fill"></i> 4.5 (59,357 ratings)</small>
                                    </p>
                                    <p class="card-text"><small>1 total hour • 32 lectures • All Levels</small></p>
                                    <p class="card-text"><strong class="text-danger">₫299,000</strong> <span
                                            class="text-muted"><s>₫449,000</s> (33% off)</span></p>
                                    <a href="#" class="btn btn-link text-danger"><small>Remove</small></a> |
                                    <a href="#" class="btn btn-link"><small>Save for Later</small></a> |
                                    <a href="#" class="btn btn-link"><small>Move to Wishlist</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
                {{-- <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav> --}}
            </div>
            <!-- Tổng Giá Tiền -->
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total: <strong class="text-danger">₫299,000</strong></h5>
                        <a href="#" class="btn btn-success mb-3">Proceed to Checkout</a>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Coupon Code</h5>
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter coupon code">
                                        <button class="btn btn-primary" type="button">Apply</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gợi Ý Khóa Học -->
        <div class="row mt-4">
            <h4>You might also like</h4>
            <div id="courseCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach (array_chunk(range(0, 9), 4) as $chunkIndex => $chunk)
                        <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                            <div class="row">
                                @foreach ($chunk as $i)
                                    <div class="col-md-3 mb-4">
                                        <div class="card">
                                            <img src="{{ asset('image/test.jpg') }}" class="card-img-top"
                                                alt="Course Image">
                                            <div class="card-body">
                                                <h6 class="card-title">Course Title</h6>
                                                <p class="card-text"><small>Author Name</small></p>
                                                <p class="card-text"><small><i class="bi bi-star-fill"></i> 4.5
                                                        (1000)
                                                    </small></p>
                                                <p class="card-text"><small>$99.99</small></p>
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
        </div>
    </div>
@endsection
