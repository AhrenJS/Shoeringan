<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Add the fields you want to allow for mass assignment
    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'quantity'
    ];
    
    // Define the relationship to the Cart model
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
