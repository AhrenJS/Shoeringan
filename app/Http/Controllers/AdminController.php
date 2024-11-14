<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        Item::create($request->all());
        return redirect()->route('admin.index')->with('success', 'Item added successfully.');
    }

    public function edit(Item $item)
    {
        return view('admin.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $item->update($request->all());
        return redirect()->route('admin.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('admin.index')->with('success', 'Item deleted successfully.');
    }
}
