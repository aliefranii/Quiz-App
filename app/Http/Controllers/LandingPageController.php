<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return view('landingpage');  // Menampilkan halaman landing page
    }
}
