<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\OTPAuthController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\HomeController;

// Route for the home page
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/', function () {
    return view('index');
})->name('index');

// Route to show the registration form
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register.form');

// Route to handle the registration logic
Route::post('/register', [RegistrationController::class, 'register'])->name('register');

// Route to display the login form
Route::get('/login', [OTPAuthController::class, 'showLoginForm'])->name('login');

// Route to request an OTP
Route::post('/login', [OTPAuthController::class, 'requestOTP'])->name('login.request');

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

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login')->with('message', 'Logged out successfully!');
})->middleware('auth')->name('logout');