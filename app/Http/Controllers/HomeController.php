<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();
        
        // Return the home view with user data
        return view('home', compact('user'));
    }
}