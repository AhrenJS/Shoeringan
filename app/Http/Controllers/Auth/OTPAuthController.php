<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\OTPService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OTPAuthController extends Controller
{
    protected $otpService;

    public function __construct(OTPService $otpService)
    {
        $this->otpService = $otpService;
    }

    public function showLoginForm()
    {
        return view('auth.login'); // Create a view for the login form
    }

    public function requestOTP(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);

        $user = User::where('email', $request->email)->first();
        $this->otpService->sendOTP($user);

        return redirect()->route('otp.verify')->with('message', 'OTP sent to your email.');
    }

    public function verifyOTP(Request $request)
    {
        $request->validate(['otp' => 'required']);

        $user = User::where('otp', $request->otp)
            ->where('otp_expires_at', '>=', now())
            ->first();

            if (!$user) {
                return redirect()->back()->withErrors(['otp' => 'Invalid OTP or email.']);
            }
        
            // Check if the OTP is expired
            if (now()->greaterThan($user->otp_expires_at)) {
                return redirect()->back()->withErrors(['otp' => 'OTP has expired.']);
            }
        
            // OTP is valid, so clear the OTP field and log in the user
            $user->otp = null;
            $user->otp_expires_at = null;
            $user->save();
        
            // Log the user in
            Auth::login($user);
        
            // Redirect to the dashboard
            return redirect()->route('home')->with('message', 'Logged in successfully!');
    }
}