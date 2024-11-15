<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Disable the automatic timestamps
    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'otp',
        'otp_expires_at',
    ];
    
    public function cartItems()
    {
        return $this->hasMany(Cart::class); // Assuming Cart model is used for storing cart items
    }
}