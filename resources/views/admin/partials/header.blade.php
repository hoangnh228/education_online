<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.users') }}">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.courses') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.videos') }}">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.categories') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.categories') }}">Review</a>
                </li>
            </ul>
        </div>

        <div class="dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('default-avatar.png') }}" 
                     alt="Avatar" class="rounded-circle me-2" width="30" height="30">
                <span>{{ Auth::user()->user_name }}</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-primary" href="{{ route('admin.settings') }}">Change Settings</a></li>
                <li>
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item text-danger" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
        </div>
    </div>
</nav>
