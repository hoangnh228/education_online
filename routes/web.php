<?php

use Illuminate\Support\Facades\Route;

// Route cho Trang chủ
Route::get('/home', function () {
    return view('client.home');
})->name('home');

Route::get('/', function () {
    return view('welcome');
});

// Route cho Đăng nhập
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route cho Đăng ký 
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route cho Trang Course
Route::get('/courses', function () {
    return view('client.courses');
})->name('courses');

// Route cho Trang Giỏ Hàng
Route::get('/cart', function () {
    return view('client.cart');
})->name('cart');

// Route cho Trang Checkout
Route::get('/checkout', function () {
    return view('client.checkout');
})->name('checkout');

// Route cho Trang Wishlist
Route::get('/wishlist', function () {
    return view('client.wishlist');
})->name('wishlist');

// Route cho Trang Watch
Route::get('/watch', function () {
    return view('client.watch');
})->name('watch');

// Route cho Trang "My Learning"
Route::get('/my-learning', function () {
    return view('client.my-learning');
})->name('my-learning');

// Route cho Trang Đăng Nhập Admin
Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

// Route cho Trang Dashboard Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Route cho Trang Quản Lý Người Dùng Admin
Route::get('/admin/users', function () {
    return view('admin.users');
})->name('admin.users');

// Route cho Trang Quản Lý Khóa Học Admin 
Route::get('/admin/courses', function () {
    return view('admin.courses');
})->name('admin.courses');

// Route cho Trang Quản Lý Video Admin
Route::get('/admin/videos', function () {
    return view('admin.videos');
})->name('admin.videos');

// Route cho Trang Tạo Người Dùng Mới Admin
Route::get('/admin/users/create', function () {
    return view('admin.create-user');
})->name('admin.users.create');

// Route cho Lưu Người Dùng Mới Admin 
Route::post('/admin/users', function () {
    // Logic lưu người dùng mới sẽ ở đây... 
    return redirect()->route('admin.users');
})->name('admin.users.store');

// Route cho Sửa Người Dùng Admin 
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

// Route cho Xóa Người Dùng Admin 
Route::delete('/admin/users/{id}', function ($id) {
    // Logic xóa người dùng sẽ ở đây... 
    return redirect()->route('admin.users');
})->name('admin.users.destroy');

// Route cho Trang Tạo Khóa Học Mới Admin
Route::get('/admin/courses/create', function () {
    return view('admin.create-course');
})->name('admin.courses.create');

// Route cho Lưu Khóa Học Mới Admin
Route::post('/admin/courses', function () {
    // Logic lưu khóa học mới sẽ ở đây... 
    return redirect()->route('admin.courses');
})->name('admin.courses.store');

// Route cho Sửa Khóa Học Admin 
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

// Route cho Cập Nhật Khóa Học Admin
Route::put('/admin/courses/{id}', function ($id) {
    // Logic cập nhật khóa học sẽ ở đây... 
    return redirect()->route('admin.courses');
})->name('admin.courses.update');

// Route cho Xóa Khóa Học Admin
Route::delete('/admin/courses/{id}', function ($id) {
    // Logic xóa khóa học sẽ ở đây... 
    return redirect()->route('admin.courses');
})->name('admin.courses.destroy');

// Route cho Trang Tạo Video Mới Admin
Route::get('/admin/videos/create', function () {
    return view('admin.create-video');
})->name('admin.videos.create');

// Route cho Lưu Video Mới Admin
Route::post('/admin/videos', function () {
    // Logic lưu video mới sẽ ở đây... 
    return redirect()->route('admin.videos');
})->name('admin.videos.store');

// Route cho Sửa Video Admin
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

// Route cho Cập Nhật Video Admin 
Route::put('/admin/videos/{id}', function ($id) {
    // Logic cập nhật video sẽ ở đây...
    return redirect()->route('admin.videos');
})->name('admin.videos.update');

// Route cho Xóa Video Admin
Route::delete('/admin/videos/{id}', function ($id) {
    // Logic xóa video sẽ ở đây... 
    return redirect()->route('admin.videos');
})->name('admin.videos.destroy');

// Route cho Trang Dashboard Giáo Viên
Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->name('teacher.dashboard');

// Route cho Trang Tạo Khóa Học Mới Cho Giáo Viên
Route::get('/teacher/courses/create', function () {
    return view('teacher.create-course');
})->name('teacher.courses.create');

// Route cho Lưu Khóa Học Mới Cho Giáo Viên 
Route::post('/teacher/courses', function () {
    // Logic lưu khóa học mới sẽ ở đây... 
    return redirect()->route('teacher.courses');
})->name('teacher.courses.store');

// Route cho Trang Xem Chi Tiết Khóa Học Cho Giáo Viên
Route::get('/teacher/courses/{id}', function ($id) {
    return view('teacher.view-course');
})->name('teacher.courses.view');
