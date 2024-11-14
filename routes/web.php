<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\OTPAuthController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\CartController;

// Route for the home page
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/passwords', function () {
    return view('passwords');
});

// Route to show the registration form
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register.form');

// Route to handle the registration logic
Route::post('/register', [RegistrationController::class, 'register'])->name('register');

// Route to display the login form
Route::get('/login', [OTPAuthController::class, 'showLoginForm'])->name('login');

// Route to request an OTP
Route::post('/login', [OTPAuthController::class, 'requestOTP'])->name('login.request')
    ->middleware('throttle:5,1'); // 5 requests per minute

Route::post('/login/request', [OTPAuthController::class, 'requestOTP'])
    ->name('login.request')
    ->middleware('throttle:5,1'); // 5 requests per minute

// Route to display the OTP verification form
Route::get('/verify-otp', function () {
    return view('auth.verify_otp'); // Ensure this view exists
})->name('otp.verify');

// Route to verify the OTP
Route::post('/verify-otp', [OTPAuthController::class, 'verifyOTP'])->name('otp.verify.post');

// Protected routes that require authentication
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Ensure this view exists
    })->name('dashboard');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/{item}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{item}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/{item}', [AdminController::class, 'destroy'])->name('admin.destroy');

// Show Profile Page (View and edit profile)
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login')->with('message', 'Logged out successfully!');
})->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/{item}', [CartController::class, 'add'])->name('cart.add');
    Route::put('/cart/update/{item}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{item}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/pay', [CartController::class, 'pay'])->name('cart.pay');
});

Route::get('/payment-success', function () {
    return view('payment.success'); // Make sure the view exists
})->name('payment.success');