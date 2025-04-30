<?php
use App\Models\Rating;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController; // Tambahkan ini agar tidak error
use App\Http\Controllers\RatingController;


// Route untuk halaman utama
Route::get('/', [PageController::class, 'home'])->name('home'); // Pastikan method 'index' ada di CarController

Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');

Route::post('/ratings', [RatingController::class, 'store'])->name('ratings.store');

Route::get('/galeri', [PageController::class, 'gallery'])->name('gallery');
Route::get('/artikel', [PageController::class, 'articles'])->name('artikel');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');

// Formulir Kontak
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

// Rental Mobil
Route::get('/rental-mobil', [CarController::class, 'list'])->name('cars.index');
Route::get('/booking', [CarController::class, 'booking'])->name('booking');

// Fitur Pencarian
Route::get('/search', [CarController::class, 'search'])->name('search');

// Routes yang membutuhkan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');
    Route::post('/rent/{car}', [RentalController::class, 'store'])->name('rent.store');
});

