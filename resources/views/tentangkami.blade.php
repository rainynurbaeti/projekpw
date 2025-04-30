@extends('layouts.app')
@section('content')

<!-- Section Tentang Kami -->
<div class="bg-black text-white min-h-screen py-10">
    <div class="text-center max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold mb-6">Tentang Kami</h1>
        <p class="text-lg mb-8 text-gray-300">
            Selamat datang di <strong>AmalyaTrans</strong>, Amalya Trans adalah pilihan tepat bagi Anda yang mencari layanan rental mobil profesional dan terpercaya dari Kota Bogor. Kami menghadirkan berbagai jenis armada lengkap seperti Toyota Hiace Luxury, Isuzu Elf, Mercedes Sprinter, Bus Medium, Bus Besar, Avanza, Fortuner, dan banyak lagi — semua dalam kondisi prima dan selalu siap jalan.

            Melayani berbagai kebutuhan perjalanan antar kota maupun dalam kota, Amalya Trans meliputi rute populer seperti Bogor, Bandung, Jakarta, Bali, Nusa Tenggara Timur (NTT), serta destinasi lainnya sesuai permintaan Anda.

            Dengan semangat “Rent A Car Solution”, kami menghadirkan solusi transportasi terbaik untuk Anda. Mulai dari perjalanan wisata, urusan bisnis, ziarah, hingga kebutuhan keluarga, kami siap mendampingi perjalanan Anda dengan driver berpengalaman, armada bersih dan
        </p>
    </div>

    <!-- Galeri Mobil -->
    <div class="max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold text-center mb-6 text-white">Galeri Mobil</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4">
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
    <div class="max-w-2xl mx-auto mt-6 p-4 bg-green-100 text-green-800 border border-green-300 rounded-md text-center">
        {{ session('success') }}
    </div>
@endif



<!-- Komentar Pengguna dengan Slider -->
<div class="max-w-5xl mx-auto mt-10">
    <div class="grid md:grid-cols-2 gap-8 items-center">
        <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Apa Kata Mereka?</h2>
            <p class="text-gray-600">
                Simak pengalaman pelanggan yang puas dengan layanan kami di AmalyaTrans.
                Ulasan mereka adalah motivasi kami untuk terus memberikan pelayanan terbaik.
            </p>
        </div>

        <div x-data="{ activeSlide: 0, totalSlides: {{ $ratings->count() }} }" class="relative w-full">
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500"
                     :style="'transform: translateX(-' + activeSlide * 100 + '%)'">
                    @foreach($ratings as $rating)
                    <div class="min-w-full px-2">
                        <div class="bg-white border border-gray-200 rounded-xl shadow p-4 h-full flex flex-col justify-between max-w-md mx-auto break-words min-h-60">

                            <div class="max-w-md bg-white rounded-xl shadow-md p-6 text-center">
                                <!-- Komentar -->
                                <p class="text-gray-600 text-base leading-relaxed mb-6 min-h-40 text-justify italic">
                                    “{{ $rating->comment }}”
                                </p>

                                <!-- Rating -->
                                <div class="inline-flex bg-[#FFF3EB] rounded-md px-4 py-1 mb-4">
                                    @for ($i = 0; $i < $rating->rating; $i++)
                                        <svg class="w-5 h-5 text-[#FFB547]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967h4.173c.969 0 1.371 1.24.588 1.81l-3.378 2.454 1.287 3.967c.3.921-.755 1.688-1.539 1.118L10 13.011l-3.378 2.454c-.783.57-1.838-.197-1.539-1.118l1.287-3.967-3.378-2.454c-.783-.57-.38-1.81.588-1.81h4.173l1.286-3.967z"/>
                                        </svg>
                                    @endfor
                                </div>

                                <!-- Nama -->
                                <div class="text-sm text-gray-900 font-semibold">— {{ $rating->name }}</div>
                            </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Tombol navigasi -->
            <div class="flex justify-center gap-2 mt-4">
                <template x-for="(slide, index) in totalSlides">
                    <button @click="activeSlide = index"
                            class="w-3 h-3 rounded-full"
                            :class="index === activeSlide ? 'bg-blue-600' : 'bg-gray-300'"></button>
                </template>
            </div>
        </div>
    </div>
</div>



<!-- Formulir Rating dan Komentar -->
<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Beri Rating dan Komentar</h2>
    <form method="POST" action="{{ route('ratings.store') }}" class="space-y-4">
        @csrf
        <input type="text" id="name" name="name" placeholder="Nama Anda" required
               class="w-full px-4 py-2 border border-gray-300 rounded-md text-black focus:outline-none focus:ring-2 focus:ring-blue-500" />

        <select id="rating" name="rating" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md text-black focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="5">⭐⭐⭐⭐⭐ (5)</option>
            <option value="4">⭐⭐⭐⭐ (4)</option>
            <option value="3">⭐⭐⭐ (3)</option>
            <option value="2">⭐⭐ (2)</option>
            <option value="1">⭐ (1)</option>
        </select>

        <textarea id="comment" name="comment" rows="4" placeholder="Tulis komentar Anda..." required
                  class="w-full px-4 py-2 border border-gray-300 rounded-md text-black focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>

        <button type="submit"
                class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300">
            Kirim
        </button>
    </form>
</div>
<!-- Tambahkan Alpine.js -->
<script src="//unpkg.com/alpinejs" defer></script>



@endsection
