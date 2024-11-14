<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Item;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->email === 'shoeringan@gmail.com') {
            $items = Item::all();
            return view('admin.index', compact('items'));
        }
        return redirect()->route('home')->with('error', 'You do not have access to this page.');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validate image type
        ]);

        $item = new Item();
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->quantity = $request->input('quantity');

        if ($request->hasFile('image')) {
            // Store the image in the 'public/images' directory
            $imagePath = $request->file('image')->store('images', 'public');
            // Save the image path to the database
            $item->image_path = $imagePath;
        }

        $item->save();

        return redirect()->route('admin.index')->with('success', 'Item added successfully');
    }

    public function edit(Item $item)
    {
        return view('admin.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validate image type
        ]);

        $item = Item::findOrFail($id);
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->quantity = $request->input('quantity');

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($item->image_path) {
                Storage::disk('public')->delete($item->image_path);
            }

            // Store the new image in the 'public/images' directory
            $imagePath = $request->file('image')->store('images', 'public');
            // Update the image path in the database
            $item->image_path = $imagePath;
        }

        $item->save();

        return redirect()->route('admin.index')->with('success', 'Item updated successfully');
    }

    public function destroy(Item $item)
    {
        // Delete the image if it exists before deleting the item
        if ($item->image_path) {
            Storage::disk('public')->delete($item->image_path);
        }

        $item->delete();
        return redirect()->route('admin.index')->with('success', 'Item deleted successfully.');
    }
}