<header class="bg-light p-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="path/to/logo.png" alt="Logo" height="40"></a>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="exploreDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                Explore
            </button>
            <ul class="dropdown-menu" aria-labelledby="exploreDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Search courses...">
        </div>
        <div class="icons d-flex align-items-center">
            <a href="#" class="me-3"><i class="bi bi-cart"></i></a>
            @if (auth()->check())
                <a href="#" class="me-3"><i class="bi bi-heart"></i></a>
                <a href="#" class="me-3"><i class="bi bi-bell"></i></a>
                <a href="#" class="me-3"><img src="path/to/avatar.jpg" alt="Avatar" class="rounded-circle"
                        height="40"></a>
                <div class="accordion" id="userAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Become a Teacher
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#userAccordion">
                            <div class="accordion-body">
                                Content for becoming a teacher.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                My Learning
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#userAccordion">
                            <div class="accordion-body">
                                Content for my learning.
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-secondary">Sign Up</a>
            @endif
        </div>
    </div>
</header>
