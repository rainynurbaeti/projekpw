<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
{
    public function store(Request $request, Car $car)
    {
        $rental = Rental::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_price' => $car->price_per_day * (strtotime($request->end_date) - strtotime($request->start_date)) / 86400,
            'status' => 'pending'
        ]);

        return redirect()->route('cars.index')->with('success', 'Mobil berhasil dipesan.');
    }
}
