<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Mail;

class OTPService
{
    public function generateOTP()
    {
        return random_int(100000, 999999); // Generate a 6-digit OTP
    }

    public function sendOTP(User $user)
    {
        $otp = $this->generateOTP();
        $user->otp = $otp;
        $user->otp_expires_at = now()->addMinutes(5); // OTP expires in 5 minutes
        $user->save();

        Mail::send('emails.otp', ['otp' => $otp], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Your OTP Code');
        });
    }
}