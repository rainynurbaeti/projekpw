<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand', 'price_per_day', 'image', 'description'];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
