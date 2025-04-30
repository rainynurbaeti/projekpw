<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class PageController extends Controller
{

    public function home()
    {
        return view('home');
    }

   
    public function about()
    {
        $ratings = Rating::latest()->get(); // Ambil semua komentar dari database
        return view('tentangkami', compact('ratings')); // Kirim ke view
    }
    public function gallery()
    {
        return view('gallery');
    }

    public function articles()
    {
        return view('artikel');
    }

    public function contact()
    {
        return view('contact');
    }
}

