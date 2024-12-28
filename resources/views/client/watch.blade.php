@extends('layouts.app')

@section('title', 'Watch Video')

@section('content')
    <div class="container-fluid mt-4">
        <!-- Video Player -->
        <div class="embed-responsive embed-responsive-16by9 w-100 mb-4">
            <video class="embed-responsive-item w-100" controls poster="path/to/poster.jpg">
                <source src="path/to/video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <!-- Tabs -->
        <ul class="nav nav-tabs" id="watchTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="content-tab" data-bs-toggle="tab" data-bs-target="#content"
                    type="button" role="tab" aria-controls="content" aria-selected="true">Course Content</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button"
                    role="tab" aria-controls="overview" aria-selected="false">Overview</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button"
                    role="tab" aria-controls="reviews" aria-selected="false">Reviews</button>
            </li>
        </ul>
        <div class="tab-content mt-4" id="watchTabContent">
            <!-- Course Content -->
            <div class="tab-pane fade show active" id="content" role="tabpanel" aria-labelledby="content-tab">
                <div class="accordion" id="courseContentAccordion">
                    <!-- Section 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Section 1: Introduction
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#courseContentAccordion">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Introduction to synthetic data (5
                                            min)</a></li>
                                    <li><a href="#" class="text-decoration-none">Types of synthetic data and key use
                                            cases (6 min)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Section 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Section 2: Techniques for Generating Synthetic Data
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#courseContentAccordion">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Lesson 1 (4 min)</a></li>
                                    <li><a href="#" class="text-decoration-none">Lesson 2 (5 min)</a></li>
                                    <li><a href="#" class="text-decoration-none">Lesson 3 (4 min)</a></li>
                                    <li><a href="#" class="text-decoration-none">Lesson 4 (4 min)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Section 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Section 3: Challenges and Practical Tips
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#courseContentAccordion">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Lesson 1 (5 min)</a></li>
                                    <li><a href="#" class="text-decoration-none">Lesson 2 (5 min)</a></li>
                                    <li><a href="#" class="text-decoration-none">Lesson 3 (5 min)</a></li>
                                    <li><a href="#" class="text-decoration-none">Lesson 4 (5 min)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Section 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Section 4: Synthetic Data in Action
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#courseContentAccordion">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Lesson 1 (9 min)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Section 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Section 5: Conclusion
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#courseContentAccordion">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="text-decoration-none">Lesson 1 (2 min)</a></li>
                                    <li><a href="#" class="text-decoration-none">Lesson 2 (2 min)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Overview -->
            <div class="tab-pane fade" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <h3>Synthetic Data</h3>
                <div class="d-flex align-items-center mb-3">
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <span>4.9</span>
                    </div>
                    <span class="ms-2">11 ratings</span>
                    <span class="ms-4">484 Students</span>
                </div>
                <p><strong>Last updated:</strong> November 2024</p>
                <p><strong>Language:</strong> English <span class="text-muted">(auto captions available)</span></p>
                <p><strong>Total duration:</strong> 1 hour <span class="text-muted">(13 lectures)</span></p>
                <p><strong>Skill level:</strong> All Levels</p>
                <p><strong>Platforms:</strong> Available on iOS and Android</p>
            </div>

            <!-- Reviews -->
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <h3>Reviews</h3>
                <div class="d-flex align-items-center mb-3">
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <span>4.9</span>
                    </div>
                    <span class="ms-2">11 ratings</span>
                </div>
                <div class="review">
                    <p><strong>John Doe</strong> - <i>April 2024</i></p>
                    <p>Great course! Learned a lot about synthetic data.</p>
                </div>
                <div class="review">
                    <p><strong>Jane Smith</strong> - <i>March 2024</i></p>
                    <p>Very informative and well-structured. Highly recommend!</p>
                </div>
                <div class="review">
                    <p><strong>Emily Johnson</strong> - <i>February 2024</i></p>
                    <p>The course provided comprehensive insights into synthetic data. Fantastic!</p>
                </div>
                <div class="review">
                    <p><strong>Michael Brown</strong> - <i>January 2024</i></p>
                    <p>Excellent content and delivery. Would love to see more courses like this.</p>
                </div>
            </div>

        </div>
    </div>
@endsection
