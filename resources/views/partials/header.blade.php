<header class="bg-light py-3 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo Section -->
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('path/to/logo.png') }}" alt="Logo" height="40">
            </a>
        </div>

        <!-- Search Bar -->
        <div class="search-bar flex-grow-1 mx-4">
            <input type="text" class="form-control" placeholder="Search courses..." aria-label="Search">
        </div>

        <!-- Icons and Actions -->
        <div class="icons d-flex align-items-center">
            @auth
                <a href="#" class="me-3 text-secondary" title="Cart">
                    <i class="bi bi-cart fs-4"></i>
                </a>
                <a href="#" class="me-3 text-secondary" title="Wishlist">
                    <i class="bi bi-heart fs-4"></i>
                </a>
                <a href="#" class="me-3 text-secondary" title="Notifications">
                    <i class="bi bi-bell fs-4"></i>
                </a>
                <a href="#" class="me-3" title="Profile">
                    <img src="{{ asset('path/to/avatar.jpg') }}" alt="Avatar" class="rounded-circle border"
                        height="40" width="40">
                </a>
                <a href="{{ route('logout') }}" class="btn btn-danger btn-sm">Logout</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary btn-sm me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-secondary btn-sm">Sign Up</a>
            @endauth
        </div>
    </div>
</header>
