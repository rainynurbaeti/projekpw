@extends('layouts.app')
@section('content')
<h1>Galeri Rental Mobil</h1>
<!-- Galeri Mobil -->
<div style="max-width: 800px; margin: 20px auto; text-align: center;">
    <h2>Galeri Mobil</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; padding: 10px;">
        @foreach(['mobil1.jpeg', 'mobil2.jpeg', 'mobil3.jpeg', 'mobil4.jpeg', 'mobil5.jpeg', 'mobil6.jpeg'] as $mobil)
            <div style="border-radius: 10px; overflow: hidden; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); display: flex; justify-content: center; align-items: center; height: 200px; background: #f8f8f8;">
                <img src="{{ asset('image/' . $mobil) }}" alt="Mobil Rental" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            </div>
        @endforeach
    </div>
</div>
@endsection
