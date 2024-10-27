<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (Auth::check()) {
            if (Auth::user()->email === 'shoeringan@gmail.com') {
                return redirect()->route('admin.index');
            }
        }
        return view('home', ['user' => $user]);
    }
}
