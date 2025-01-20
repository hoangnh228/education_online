<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController as UserAuthController;

// Route for user login
Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserAuthController::class, 'login'])->name('login.submit');

Route::get('/', function () {
    return view('client.home');
})->name('home');

// Route for logout
Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');

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

// Admin group routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Route login
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // Route default for /admin
    Route::middleware([AdminMiddleware::class])->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('courses', [CourseController::class, 'index'])->name('courses');

        Route::get('users', [UserController::class, 'index'])->name('users');

        Route::get('videos', [VideoController::class, 'index'])->name('videos');

        Route::get('categories', [CategoryController::class, 'index'])->name('categories');
    });
});


Route::get('admin/create/categories', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('admin/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

Route::get('admin/courses/create', [CourseController::class, 'create'])->name('admin.courses.create');
Route::post('admin/courses', [CourseController::class, 'store'])->name('admin.courses.store');
Route::get('admin/courses/{id}/edit', [CourseController::class, 'edit'])->name('admin.courses.edit');
Route::put('admin/courses/{id}', [CourseController::class, 'update'])->name('admin.courses.update');
Route::delete('admin/courses/{id}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');

Route::get('/admin/videos/create', [VideoController::class, 'create'])->name('admin.videos.create');
Route::post('/admin/videos', [VideoController::class, 'store'])->name('admin.videos.store');
Route::get('/admin/videos/{id}/edit', [VideoController::class, 'edit'])->name('admin.videos.edit');
Route::put('/admin/videos/{id}', [VideoController::class, 'update'])->name('admin.videos.update');
Route::delete('/admin/videos/{id}', [VideoController::class, 'destroy'])->name('admin.videos.destroy');

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
