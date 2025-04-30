<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::latest()->get(); // Ambil semua rating terbaru
        return view('tentang-kami', compact('ratings')); // Kirim ke view
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500',
        ]);

        Rating::create([
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->route('about')->with('success', 'Terima kasih atas feedback Anda!');

    }
}
