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
        'name' => 'required|string|max:255',
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string',
    ]);

    Rating::create([
        'name' => $request->name,
        'rating' => $request->rating,
        'comment' => $request->comment,
    ]);

    return redirect()->back()->with('success', 'Komentar Anda berhasil dikirim!');
}

}
