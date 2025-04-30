@extends('layouts.app')
@section('content')
<div class="bg-black text-red-500 min-h-screen py-10">
    <div class="text-center max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold mb-6">Tentang Kami</h1>
        <p class="text-lg mb-8">
            Selamat datang di <strong>RentalYuk</strong>, layanan terbaik untuk kebutuhan transportasi Anda. Kami menyediakan berbagai jenis mobil dengan harga terjangkau dan pelayanan terbaik. RentalYuk hadir untuk memberikan pengalaman sewa mobil yang nyaman dan mudah bagi Anda.
        </p>
    </div>

    <!-- Galeri Mobil -->
    <div class="max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold text-center mb-6">Galeri Mobil</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach(['mobil1.jpeg', 'mobil2.jpeg', 'mobil3.jpeg', 'mobil4.jpeg', 'mobil5.jpeg', 'mobil6.jpeg'] as $mobil)
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('storage/image/' . $mobil) }}" alt="Mobil Rental" class="w-full h-48 object-cover">
                </div>
            @endforeach
        </div>
    </div>
</div>

    <!-- Notifikasi jika komentar berhasil dikirim -->
    @if(session('success'))
        <div style="max-width: 600px; margin: 10px auto; padding: 10px; background: #d4edda; color: #155724; border-radius: 5px; text-align: center;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulir Rating dan Komentar -->
    <div style="max-width: 600px; margin: 20px auto; text-align: center; background: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);">
        <h2 style="margin-bottom: 10px;">Beri Rating dan Komentar</h2>
        <form method="POST" action="{{ route('ratings.store') }}" style="display: flex; flex-direction: column; gap: 10px;">
            @csrf
            <input type="text" id="name" name="name" placeholder="Nama Anda" required style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; width: 100%;">
            <select id="rating" name="rating" required style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                <option value="5">⭐⭐⭐⭐⭐ (5)</option>
                <option value="4">⭐⭐⭐⭐ (4)</option>
                <option value="3">⭐⭐⭐ (3)</option>
                <option value="2">⭐⭐ (2)</option>
                <option value="1">⭐ (1)</option>
            </select>
            <textarea id="comment" name="comment" rows="4" placeholder="Tulis komentar Anda..." required style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; width: 100%;"></textarea>
            <button type="submit" style="
                background: #007bff;
                color: white;
                padding: 12px;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                transition: background 0.3s;
            " onmouseover="this.style.background='#0056b3'" onmouseout="this.style.background='#007bff'">
                Kirim
            </button>
        </form>
    </div>

    <!-- Menampilkan Komentar -->
    <div style="max-width: 600px; margin: 20px auto;">
        <h2 style="text-align: center;">Komentar Pengguna</h2>
        @if(isset($ratings) && $ratings->isNotEmpty())
            @foreach($ratings as $rating)
                <div style="border-bottom: 1px solid #ddd; padding: 15px; background: #ffffff; border-radius: 8px; margin-bottom: 10px; box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div style="width: 40px; height: 40px; background: #007bff; color: white; display: flex; justify-content: center; align-items: center; border-radius: 50%; font-weight: bold; font-size: 18px;">
                            {{ strtoupper(substr($rating->name, 0, 1)) }}
                        </div>
                        <div>
                            <p style="font-weight: bold; margin: 0;">{{ $rating->name }}</p>
                            <p style="color: #ff9800; font-size: 18px; margin: 0;">{{ str_repeat('⭐', $rating->rating) }}</p>
                        </div>
                    </div>
                    <p style="color: #555; margin-top: 10px;">{{ $rating->comment }}</p>
                </div>
            @endforeach
        @else
            <p style="text-align: center; color: #666;">Belum ada komentar.</p>
        @endif
    </div>
@endsection
