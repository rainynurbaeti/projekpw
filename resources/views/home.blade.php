@extends('layouts.app')

@section('content')
<div class="pt-[88px] max-w-[1200px] mx-auto px-6 flex flex-col md:flex-row items-center md:items-start gap-6 md:gap-0">

    <!-- Konten Kiri -->
    <section class="flex-1 max-w-xl">
        <h1 class="font-orbitron text-[48px] md:text-[64px] leading-tight font-extrabold tracking-tight select-none mb-4">
            AMALYA TRANS
        </h1>
        <h2 class="text-2xl md:text-xl leading-snug font-light mb-8 max-w-md text-gray-700">
            Pilih armada terbaik sesuai kebutuhan Anda — mulai dari perjalanan pribadi, keluarga, hingga keperluan korporat. Nyaman, aman, dan terpercaya.
        </h2>

        <div class="flex flex-wrap gap-4 mb-12">
            <a href="{{ route('rentalmobil') }}" class="bg-[#E30613] font-orbitron font-bold text-xs tracking-widest px-8 py-4 rounded-md hover:bg-red-700 transition shadow-md">
                LIHAT GALERI
            </a>
            <a href="https://wa.me/6282210001609" target="_blank" class="border border-[#E30613] text-[#E30613] font-orbitron font-bold text-xs tracking-widest px-8 py-4 rounded-md hover:bg-[#E30613] hover:text-white transition shadow-md">
                HUBUNGI KAMI
            </a>
        </div>
    </section>

 <!-- Gambar Mobil (Carousel) -->
<section class="flex-1 flex justify-center md:justify-end w-full">
    <div class="relative w-full">
        <div id="carousel" class="overflow-hidden rounded-lg shadow-lg w-full">
            <div id="carousel-images" class="flex transition-transform duration-500 ease-in-out w-full">
                <img src="{{ asset('storage/image/mobil3.jpeg') }}" alt="Toyota Fortuner" class="min-w-full h-[350px] object-cover" />
                <img src="{{ asset('storage/image/mobil5.jpeg') }}" alt="Mitsubishi Xpander" class="min-w-full h-[350px] object-cover" />
                <img src="{{ asset('storage/image/mobil6.jpeg') }}" alt="Toyota Alphard" class="min-w-full h-[350px] object-cover" />
                <img src="{{ asset('storage/image/mobil8.jpeg') }}" alt="Hiace Commuter" class="min-w-full h-[350px] object-cover" />
            </div>
        </div>

        <!-- Navigasi -->
        <button id="prev" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white px-3 py-2 rounded-full hover:bg-opacity-75 z-10">
            &#10094;
        </button>
        <button id="next" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white px-3 py-2 rounded-full hover:bg-opacity-75 z-10">
            &#10095;
        </button>
    </div>
</section>
</div>

<!-- Script Slider -->
<script>
    const carousel = document.getElementById('carousel-images');
    const images = carousel.children;
    const totalImages = images.length;
    let index = 0;

    const updateSlide = () => {
        carousel.style.transform = `translateX(-${index * 100}%)`;
    };

    document.getElementById('prev').addEventListener('click', () => {
        index = (index - 1 + totalImages) % totalImages;
        updateSlide();
        resetAutoSlide();
    });

    document.getElementById('next').addEventListener('click', () => {
        index = (index + 1) % totalImages;
        updateSlide();
        resetAutoSlide();
    });

    // Auto-slide function
    let autoSlide = setInterval(() => {
        index = (index + 1) % totalImages;
        updateSlide();
    }, 3000); // Ganti slide setiap 3 detik

    // Reset timer ketika user klik tombol manual
    const resetAutoSlide = () => {
        clearInterval(autoSlide);
        autoSlide = setInterval(() => {
            index = (index + 1) % totalImages;
            updateSlide();
        }, 3000);
    };
</script>
@endsection
