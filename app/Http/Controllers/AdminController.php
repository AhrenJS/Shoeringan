<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->email === 'shoeringan@gmail.com') {
                return view('admin.index');
            }
        }
        return redirect()->route('home')->with('error', 'You do not have access to this page.');
    }
}
