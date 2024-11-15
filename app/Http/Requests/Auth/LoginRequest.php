<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function authenticate(): void
    {
        // Ensure the user is not rate-limited before attempting login
        $this->ensureIsNotRateLimited();

        // Attempt authentication
        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        // Clear the rate limiter for this user after a successful login
        RateLimiter::clear($this->throttleKey());
    }

    public function ensureIsNotRateLimited(): void
    {
        // Check if the user has exceeded the rate limit
        if (RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            $seconds = RateLimiter::availableIn($this->throttleKey());

            // Flash a custom error message to the session
            // The custom message will be available for one request
            Session::flash('error', 'Too many login attempts. Please try again in ' . ceil($seconds / 60) . ' minutes.');

            // Prevent the default Laravel 429 redirect behavior by manually handling the rate limit exceeded state
            throw ValidationException::withMessages([
                'email' => 'Too many attempts. Please wait before trying again.',
            ]);
        }
    }

    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->string('email')).'|'.$this->ip());
    }
}