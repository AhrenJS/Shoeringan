<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        // Get the cart items for the logged-in user, if any
        $cartItems = auth()->user()->cartItems;

        // Check if there are any cart items
        if (!$cartItems) {
            $cartItems = collect(); // Return an empty collection if no items found
        }

        // Calculate the total price of the cart, only if there are cart items
        $total = $cartItems->sum(function($cartItem) {
            return $cartItem->quantity * $cartItem->item->price;
        });

        // Return the view with the cart items and total price
        return view('cart.index', compact('cartItems', 'total'));
    }

    public function add(Request $request, $itemId)
    {
        $user = Auth::user();
        $item = Item::find($itemId);

        // Check if the item exists
        if (!$item) {
            return redirect()->route('home')->with('error', 'Item not found.');
        }

        // Check if the item is in stock
        if ($item->quantity == 0) {
            return redirect()->route('home')->with('error', 'This item is out of stock.');
        }

        // Add the item to the cart (if not already there, create it)
        $cartItem = Cart::firstOrCreate(
            ['user_id' => $user->id, 'item_id' => $item->id],
            ['quantity' => 0]  // Default quantity if the item doesn't exist in the cart
        );

        // Make sure the quantity being added does not exceed stock
        if ($request->quantity > $item->quantity) {
            return redirect()->route('home')->with('error', 'You cannot add more than the available stock.');
        }

        // Increment the quantity if item is already in the cart
        $cartItem->quantity += $request->quantity;
        $cartItem->save();

        return redirect()->route('home')->with('success', 'Item added to cart successfully.');
    }

    public function update(Request $request, Item $item)
    {
        // Find the cart item for the logged-in user
        $cartItem = Cart::where('user_id', Auth::id())->where('item_id', $item->id)->first();

        // If the cart item exists
        if ($cartItem) {
            // Validate the quantity to make sure it's within the available stock
            $validated = $request->validate([
                'quantity' => 'required|integer|min:1|max:' . $item->quantity,  // Ensure quantity is between 1 and available stock
            ]);

            // Update the cart item quantity
            $cartItem->quantity = $validated['quantity'];
            $cartItem->save();

            return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
        }

        return redirect()->route('cart.index')->with('error', 'Item not found in your cart.');
    }

    public function remove(Item $item)
    {
        $cartItem = Cart::where('user_id', Auth::id())->where('item_id', $item->id)->first();

        if ($cartItem) {
            $cartItem->delete();
        }

        return back()->with('success', 'Item removed from cart.');
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