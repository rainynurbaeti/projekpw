@extends('layouts.app')

@section('content')
<div style="
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
">
    <img src="{{ $car->image }}" alt="{{ $car->name }}" style="width: 60%; max-width: 500px; border-radius: 5px;">
    <h2>{{ $car->name }}</h2>
    <p><strong>Brand:</strong> {{ $car->brand }}</p>
    <p><strong>Harga per hari:</strong> <span style="color: #007bff; font-weight: bold;">Rp {{ number_format($car->price_per_day, 0, ',', '.') }}</span></p>
    <p><strong>Deskripsi:</strong> {{ $car->description }}</p>

    <form action="{{ route('rent.store', $car->id) }}" method="POST" style="
        display: flex;
        flex-direction: column;
        width: 50%;
        max-width: 400px;
    ">
        @csrf
        <label for="start_date">Tanggal Mulai:</label>
        <input type="date" name="start_date" required style="padding: 10px; margin-bottom: 10px;">

        <label for="end_date">Tanggal Selesai:</label>
        <input type="date" name="end_date" required style="padding: 10px; margin-bottom: 10px;">

        <button type="submit" style="
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        ">Sewa Sekarang</button>
    </form>
</div>
@endsection
