<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item; // Import the Item model
use App\Models\Cart; // Import the Cart model

class HomeController extends Controller
{
    public function index()
    {
        // Check if the user is authenticated
        $user = Auth::user();
        
        // If the user is the admin (shoeringan@gmail.com), redirect to the admin page
        if (Auth::check()) {
            if ($user->email === 'shoeringan@gmail.com') {
                return redirect()->route('admin.index');
            }
        }

        // Get all available items for users to view and purchase
        $items = Item::all();

        // Get the user's cart items (if any)
        $cartItems = Cart::where('user_id', $user->id)->get();

        // Return the view with the items, cart items, and user data
        return view('home', compact('items', 'cartItems', 'user'));
    }

    public function pay(Request $request)
    {
        $user = Auth::user();

        // Retrieve all items in the user's cart
        $cartItems = Cart::where('user_id', $user->id)->get();

        // Process each cart item and subtract the quantities from stock
        foreach ($cartItems as $cartItem) {
            $item = $cartItem->item;

            // Subtract the purchased quantity from the total stock
            if ($item->quantity >= $cartItem->quantity) {
                $item->quantity -= $cartItem->quantity;
                $item->save();
            }
        }

        // Empty the user's cart after the purchase
        Cart::where('user_id', $user->id)->delete();

        // Redirect to payment successful page
        return redirect()->route('payment.success');
    }
}