@extends('layouts.app')

@section('content')
<div class="pt-[88px] max-w-[1200px] mx-auto px-6 flex flex-col md:flex-row items-center md:items-start gap-6 md:gap-0">

    <!-- Konten Kiri -->
    <section class="flex-1 max-w-xl">
        <h1 class="font-orbitron text-[48px] md:text-[64px] leading-tight font-extrabold tracking-tight select-none mb-4">
            AMALYA TRANS
        </h1>
        <h2 class="text-2xl md:text-4xl leading-snug font-light mb-8 max-w-md">
            Kami menyediakan berbagai pilihan armada yang dapat Anda pilih sesuai dengan kebutuhan Anda.        <div class="flex flex-wrap gap-4 mb-12">
            <button class="bg-[#E30613] font-orbitron font-bold text-xs tracking-widest px-8 py-4 rounded-md hover:bg-red-700 transition shadow-md">
                VIEW DEMOS
            </button>
            <button class="border border-[#E30613] text-[#E30613] font-orbitron font-bold text-xs tracking-widest px-8 py-4 rounded-md hover:bg-[#E30613] hover:text-white transition shadow-md">
                PURCHASE ROTORS
            </button>
        </div>

    </section>

    <!-- Gambar Mobil -->
    <section class="flex-1 flex justify-center md:justify-end">
    <img src="{{ asset('storage/image/mobil4.jpeg') }}"
    alt="mobil4"
    class="w-4/5 md:w-full max-w-[320px] h-auto object-contain rounded-lg shadow-lg hover:scale-105 transition-transform duration-300">
    </section>
</div>

</div>

<!-- Script Booking -->
<script>
    function bookNow(carName) {
        let jumlah = prompt("Masukkan jumlah mobil yang ingin disewa untuk " + carName + ":");

        if (jumlah && jumlah > 0) {
            let message = encodeURIComponent(
                `Halo, saya ingin menyewa mobil *${carName}* sebanyak *${jumlah}* unit. Bisa berikan detail lebih lanjut?`
            );
            window.open(`https://wa.me/6281234567890?text=${message}`, '_blank');
        } else {
            alert("Mohon masukkan jumlah mobil yang valid.");
        }
    }
</script>
@endsection
