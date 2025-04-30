<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    public function list()
{
    // Ambil semua data mobil dari database
    $cars = Car::all();
    
    // Kirim data ke tampilan
    return view('cars.index', compact('cars'));
}

}
