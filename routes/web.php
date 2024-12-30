<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;


// Route for Home Page
Route::get('/home', function () {
    return view('client.home');
})->name('home');

Route::get('/', function () {
    return view('welcome');
});

// Route for Login Page
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route for Register Page
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route for Courses Page
Route::get('/courses', function () {
    return view('client.courses');
})->name('courses');

// Route for Cart Page
Route::get('/cart', function () {
    return view('client.cart');
})->name('cart');

// Route for Checkout Page
Route::get('/checkout', function () {
    return view('client.checkout');
})->name('checkout');

// Route for Wishlist Page
Route::get('/wishlist', function () {
    return view('client.wishlist');
})->name('wishlist');

// Route for Watch Page
Route::get('/watch', function () {
    return view('client.watch');
})->name('watch');

// Route for "My Learning" Page
Route::get('/my-learning', function () {
    return view('client.my-learning');
})->name('my-learning');






// Route for Admin Login Page
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Routes for Admin Dashboard 
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Route for Admin User Management Page
Route::get('/admin/users', function () {
    return view('admin.users');
})->name('admin.users');

// Route for Admin Course Management Page 
Route::get('/admin/courses', function () {
    return view('admin.courses');
})->name('admin.courses');

// Route for Admin Video Management Page
Route::get('/admin/videos', function () {
    return view('admin.videos');
})->name('admin.videos');

// Route for Admin Create User Page
Route::get('/admin/users/create', function () {
    return view('admin.create-user');
})->name('admin.users.create');

// Route for Admin Save New User
Route::post('/admin/users', function () {
    // The logic to save the new user will go here...
    return redirect()->route('admin.users');
})->name('admin.users.store');

// Route for Admin Edit User Page
Route::get('/admin/users/{id}/edit', function ($id) {
    return view('admin.edit-user', ['user' => [
        'id' => $id,
        'full_name' => 'John Doe',
        'user_name' => 'john_doe',
        'dob' => '1990-01-01',
        'address' => '123 Main St, City, Country',
        'phone_number' => '123-456-7890',
        'email' => 'john@example.com',
        'role' => 'Admin',
        'image' => 'https://via.placeholder.com/50'
    ]]);
})->name('admin.users.edit');

// Route for Admin Delete User 
Route::delete('/admin/users/{id}', function ($id) {
    // Logic xóa người dùng sẽ ở đây... 
    return redirect()->route('admin.users');
})->name('admin.users.destroy');

// Route for Admin Create New Course Page
Route::get('/admin/courses/create', function () {
    return view('admin.create-course');
})->name('admin.courses.create');

// Route for Admin Save New Course
Route::post('/admin/courses', function () {
    // Logic lưu khóa học mới sẽ ở đây... 
    return redirect()->route('admin.courses');
})->name('admin.courses.store');

// Route for Admin Edit Course Page 
Route::get('/admin/courses/{id}/edit', function ($id) {
    return view('admin.edit-course', ['course' => [
        'id' => $id,
        'title' => 'Course 1',
        'teacher' => 'Teacher 1',
        'description' => 'This is a description of Course 1.',
        'duration' => '10 hours',
        'created_at' => '2024-01-01',
        'updated_at' => '2024-01-02'
    ]]);
})->name('admin.courses.edit');

// Route for Admin Update Course
Route::put('/admin/courses/{id}', function ($id) {
    // The logic to save the new user will go here...
    return redirect()->route('admin.courses');
})->name('admin.courses.update');

// Route for Admin Delete Course
Route::delete('/admin/courses/{id}', function ($id) {
    // The logic to save the new user will go here... 
    return redirect()->route('admin.courses');
})->name('admin.courses.destroy');

// Route for Admin Create New Video Page
Route::get('/admin/videos/create', function () {
    return view('admin.create-video');
})->name('admin.videos.create');

// Route for Admin Save New Video
Route::post('/admin/videos', function () {
    // The logic to save the new user will go here...
    return redirect()->route('admin.videos');
})->name('admin.videos.store');

// Route for Admin Edit Video Page
Route::get('/admin/videos/{id}/edit', function ($id) {
    return view('admin.edit-video', ['video' => [
        'id' => $id,
        'course' => 'Course 1',
        'name' => 'Video 1',
        'teacher' => 'Teacher 1',
        'description' => 'This is a description of Video 1.',
        'duration' => '1 hour',
        'url' => 'https://example.com/video1.mp4'
    ]]);
})->name('admin.videos.edit');

// Route for Admin Update Video 
Route::put('/admin/videos/{id}', function ($id) {
    // The logic to save the new user will go here...
    return redirect()->route('admin.videos');
})->name('admin.videos.update');

// Route for Admin Delete Video
Route::delete('/admin/videos/{id}', function ($id) {
    // The logic to save the new user will go here...
    return redirect()->route('admin.videos');
})->name('admin.videos.destroy');

// Route for Teacher Dashboard Page
Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->name('teacher.dashboard');

// Route for Teacher Create New Courses Page
Route::get('/teacher/courses/create', function () {
    return view('teacher.create-course');
})->name('teacher.courses.create');

// Route for Teacher Save New Course
Route::post('/teacher/courses', function () {
    // Logic lưu khóa học mới sẽ ở đây... 
    return redirect()->route('teacher.courses');
})->name('teacher.courses.store');

// Route for Teacher View Course Page
Route::get('/teacher/courses/{id}', function ($id) {
    return view('teacher.view-course');
})->name('teacher.courses.view');

// Route for Teacher Edit Course Page
Route::get('/teacher/courses/{id}/edit', function ($id) {
    return view('teacher.edit-course', ['course' => ['id' => $id, 'title' => 'Course Title ' . $id, 'teacher_name' => 'Teacher Name', 'description' => 'This is a detailed description of the course.', 'duration' => '10 hours']]);
})->name('teacher.courses.edit');

// Route for Teacher Update Course
Route::put('/teacher/courses/{id}', function ($id) {
    // // The logic to save the new user will go here...
    return redirect()->route('teacher.dashboard');
})->name('teacher.courses.update');