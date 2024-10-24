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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register.form')
                ->withErrors($validator)
                ->withInput();
        }

        // Create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            // You can add other fields here if necessary
            // 'password' => bcrypt($request->password), // Not required for OTP system
        ]);

        // Redirect or perform other actions after successful registration
        return redirect()->route('login')->with('message', 'Registration successful! You can now log in.');
    }
}
