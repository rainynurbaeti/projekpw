<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Rental Mobil</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    .font-orbitron {
      font-family: 'Orbitron', sans-serif;
    }
  </style>
</head>
<body class="bg-black text-white">
  <!-- Navbar -->
  <header class="bg-black bg-opacity-90 fixed w-full z-30 shadow-md">
    <nav class="max-w-[1200px] mx-auto flex items-center justify-between px-6 py-4">
      <div class="flex items-center space-x-3">
        <img src="{{ asset('storage/logo.jpg') }}" alt="Rotors logo" class="w-8 h-8"/>
        <span class="text-white font-orbitron font-bold text-lg tracking-wide select-none">Amalya Trans</span>
      </div>
      <ul class="hidden md:flex space-x-8 text-sm font-normal">
        <li><a href="/" class="hover:underline hover:text-[#E30613] transition">Home</a></li>
        <li><a href="{{ route('about') }}" class="hover:underline hover:text-[#E30613] transition">Tentang Kami</a></li>        <li><a href="{{ route('rentalmobil') }}" class="hover:underline hover:text-[#E30613] transition">Rental Mobil</a></li>
        <li><a href="#" class="hover:underline hover:text-[#E30613] transition">Artikel</a></li>
        <li><a href="{{ route('contact') }}" class="hover:underline hover:text-[#E30613] transition">Contact</a></li>
      </ul>
      <button class="hidden md:block bg-[#E30613] text-white font-orbitron font-bold text-xs tracking-widest px-6 py-3 rounded-md hover:bg-red-700 transition shadow-md">
        $15 PURCHASE NOW
      </button>
    </nav>
  </header>

  <!-- Main content -->
  <main class="pt-[88px] max-w-[1200px] mx-auto px-6">
    @yield('content')
  </main>
</body>
</html>
