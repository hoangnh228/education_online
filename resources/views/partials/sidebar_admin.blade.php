<nav class="bg-light p-3" style="width: 250px; height: 100vh;">
    <h4 class="text-center">Admin Panel</h4>
    <ul class="nav flex-column mt-4">
        <li class="nav-item mb-2 dropdown">
            <a href="{{ asset('admin/view_teacher') }}"
                class="nav-link {{ Request::is('admin/view_teacher') ? 'active text-white bg-primary' : '' }}">Teachers</a>
        </li>
        <li class="nav-item mb-2 dropdown">
            <a href="{{ asset('admin/view_courses') }}"
                class="nav-link {{ Request::is('admin/view_courses') ? 'active text-white bg-primary' : '' }}">Courses</a>
        </li>
        <li class="nav-item mb-2 dropdown">
            <a href="{{ asset('admin/view_playlist') }}"
                class="nav-link {{ Request::is('admin/view_playlist') ? 'active text-white bg-primary' : '' }}">Playlists</a>
        </li>
        <li class="nav-item mb-2 dropdown">
            <a href="{{ asset('admin/view_user') }}"
                class="nav-link {{ Request::is('admin/view_user') ? 'active text-white bg-primary' : '' }}">Users</a>
        </li>
    </ul>
</nav>
