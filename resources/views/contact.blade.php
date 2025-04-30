@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 0 auto; padding: 20px; background: white; box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.1); border-radius: 10px; text-align: left;">
    <h1 style="font-weight: bold; margin-bottom: 20px;">Hubungi Kami</h1>
    <p style="font-size: 16px; color: #555;">Silakan hubungi kami melalui WhatsApp atau email.</p>

    <!-- Formulir Kontak -->
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <label for="name" style="font-weight: bold;">Nama:</label>
        <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">
        
        <label for="email" style="font-weight: bold;">Email:</label>
        <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">
        
        <label for="phone" style="font-weight: bold;">Nomor HP:</label>
        <input type="tel" id="phone" name="phone" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">
        
        <label for="message" style="font-weight: bold;">Pesan:</label>
        <textarea id="message" name="message" rows="4" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
        
        <button type="submit" style="width: 100%; background: #007bff; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; font-weight: bold; transition: 0.3s;" 
            onmouseover="this.style.background='#0056b3'" onmouseout="this.style.background='#007bff'">
            Kirim Pesan
        </button>
    </form>
</div>

<div style="max-width: 600px; margin: 30px auto; text-align: left;">
    <h2 style="font-weight: bold;">Alamat Kami</h2>
    <p style="font-size: 16px; color: #555;">Jl. Contoh No. 123, Jakarta, Indonesia</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.848899136488!2d110.36521957484448!3d-7.805589977032981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578b94d90e69%3A0x7f28f925c9c4e1b0!2sYogyakarta!5e0!3m2!1sen!2sid!4v1645600817736!5m2!1sen!2sid" 
        width="100%" height="300" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy">
    </iframe>
</div>

<!-- Kontak Sosial Media -->
<div style="max-width: 600px; margin: 20px auto; text-align: left;">
    <h2 style="font-weight: bold;">Hubungi Kami Melalui</h2>
    

    <a href="https://wa.me/6281234567890" target="_blank" style="display: flex; align-items: center; gap: 10px; background: #25D366; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px; font-weight: bold; width: fit-content; transition: 0.3s;" 
        onmouseover="this.style.background='#1DA851'" onmouseout="this.style.background='#25D366'">
        <img src="{{ asset('image/logowa.png') }}" alt="WhatsApp" style="width: 25px; height: 25px;">
        WhatsApp
    </a>

 
    <a href="https://www.instagram.com/yourusername" target="_blank" style="display: flex; align-items: center; gap: 10px; background: #E4405F; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px; font-weight: bold; width: fit-content; transition: 0.3s; margin-top: 10px;" 
        onmouseover="this.style.background='#C13584'" onmouseout="this.style.background='#E4405F'">
        <img src="{{ asset('image/logoig.jpg') }}" alt="Instagram" style="width: 25px; height: 25px;">
        Instagram
    </a>
</div>
@endsection
