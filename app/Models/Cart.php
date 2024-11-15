<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // Add the 'quantity' field to the fillable array
    protected $fillable = [
        'user_id',
        'item_id',
        'quantity',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}