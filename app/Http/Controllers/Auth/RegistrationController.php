<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Display the registration form
    }

    public function register(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|regex:/^[\p{L} ]+$/u', // Only letters and spaces
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register.form')
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Create a new user
            User::create([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        } catch (\Exception $e) {
            // Handle exception
            return redirect()->route('register.form')
                ->with('error', 'Registration failed. Please try again.')
                ->withInput();
        }

        return redirect()->route('login')->with('message', 'Registration successful! You can now log in.');
    }
}
