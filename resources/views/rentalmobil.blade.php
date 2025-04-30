@extends('layouts.app')

@section('content')
<div class="text-center py-10 bg-gray-800">
    <h1 class="text-4xl font-bold text-white">Macam macam kendaraan</h1>
    <p class="text-gray-400 mt-4">Selamat datang silahkan cari kendaraan yang anda sukai.</p>
</div>

<div class="max-w-7xl mx-auto px-4 py-10">
    <h2 class="text-2xl font-semibold mb-6 text-center">Galeri Mobil</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer" onclick="showModal('Hiace Premio Luxury', 'Kendaraan eksklusif dengan interior mewah.', '{{ asset('storage/image/mobil1.jpeg') }}')">
            <img src="{{ asset('storage/image/mobil1.jpeg') }}" alt="Hiace Premio Luxury" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-800">Hiace Premio Luxury</h3>
                <p class="text-sm text-gray-600 mt-2">Kendaraan eksklusif dengan interior mewah.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer" onclick="showModal('Seat Hiace Premio', '8-10 Seat', '{{ asset('storage/image/mobil2.jpeg') }}')">
            <img src="{{ asset('storage/image/mobil2.jpeg') }}" alt="Seat Hiace Premio" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-800">Seat Hiace Premio</h3>
                <p class="text-sm text-gray-600 mt-2">8-10 Seat</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer" onclick="showModal('Hiace Commuter', '15 Seat, cocok untuk perjalanan bisnis dan wisata rombongan.', '{{ asset('storage/image/mobil3.jpeg') }}')">
            <img src="{{ asset('storage/image/mobil3.jpeg') }}" alt="Hiace Commuter" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-800">Hiace Commuter</h3>
                <p class="text-sm text-gray-600 mt-2">15 Seat, cocok untuk perjalanan bisnis dan wisata rombongan.</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer" onclick="showModal('Toyota Fortuner', 'SUV tangguh untuk berbagai medan.', '{{ asset('storage/image/mobil4.jpeg') }}')">
            <img src="{{ asset('storage/image/mobil4.jpeg') }}" alt="Toyota Fortuner" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-800">Hiace Premio Putih</h3>
                <p class="text-sm text-gray-600 mt-2">SUV tangguh untuk berbagai medan.</p>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer" onclick="showModal('Mitsubishi Xpander', 'Desain stylish dan fitur modern.', '{{ asset('storage/image/mobil5.jpeg') }}')">
            <img src="{{ asset('storage/image/mobil5.jpeg') }}" alt="Mitsubishi Xpander" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-800">Mitsubishi Xpander</h3>
                <p class="text-sm text-gray-600 mt-2">Desain stylish dan fitur modern.</p>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer" onclick="showModal('Toyota Alphard', 'Pilihan premium untuk kenyamanan maksimal.', '{{ asset('storage/image/mobil6.jpeg') }}')">
            <img src="{{ asset('storage/image/mobil6.jpeg') }}" alt="Toyota Alphard" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-800">Toyota Alphard</h3>
                <p class="text-sm text-gray-600 mt-2">Pilihan premium untuk kenyamanan maksimal.</p>
            </div>
        </div>

        <!-- Card 7 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer" onclick="showModal('Toyota Xenia', 'Pilihan mobil keluarga dengan harga terjangkau.', '{{ asset('storage/image/mobil7.jpeg') }}')">
            <img src="{{ asset('storage/image/mobil7.jpeg') }}" alt="Toyota Xenia" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-800">Toyota Xenia</h3>
                <p class="text-sm text-gray-600 mt-2">Pilihan mobil keluarga dengan harga terjangkau.</p>
            </div>
        </div>

        <!-- Card 8 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer" onclick="showModal('Hiace Commuter', 'Pilihan premium untuk kenyamanan maksimal.', '{{ asset('storage/image/mobil8.jpeg') }}')">
            <img src="{{ asset('storage/image/mobil8.jpeg') }}" alt="Hiace Commuter" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-800">Hiace Commuter</h3>
                <p class="text-sm text-gray-600 mt-2">Pilihan premium untuk kenyamanan maksimal.</p>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center hidden">
    <div class="bg-white p-6 rounded-lg max-w-lg w-full">
        <img id="modal-image" class="w-full h-48 object-cover rounded-lg" src="" alt="Image">
        <h3 id="modal-title" class="text-lg font-bold text-gray-800 mt-4"></h3>
        <p id="modal-description" class="text-sm text-gray-600 mt-2"></p>
        <button onclick="closeModal()" class="mt-4 px-6 py-2 bg-blue-500 text-white rounded-lg">Close</button>
    </div>
</div>

<script>
    function showModal(title, description, imageUrl) {
        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-description').innerText = description;
        document.getElementById('modal-image').src = imageUrl;
        document.getElementById('modal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }
</script>

@endsection
