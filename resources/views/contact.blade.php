@extends('layouts.app')

@section('content')
    <div
        style="max-width: 750px; margin: 20px auto; padding: 6px; background: #fff; box-shadow: 0 0 20px rgba(0,0,0,0.05); border-radius: 16px;">

        <div
            style="color: #000; max-width: 700px; margin: 40px auto; padding: 30px; background: #fff; box-shadow: 0 0 20px rgba(0,0,0,0.05); border-radius: 12px;">
            <h1 style="font-weight: bold; margin-bottom: 20px; font-size: 30px;">Hubungi Kami</h1>
            <p style="font-size: 16px; color: #555; margin-bottom: 30px;">Silakan hubungi kami melalui WhatsApp atau email.
            </p>

            <!-- Formulir Kontak -->
            <action="{{ route('contact.submit') }}" method="POST">
            @csrf

            <div style="margin-bottom: 15px;">
                <label for="name" style="font-weight: bold; display: block; margin-bottom: 5px;">Nama:</label>
                <input type="text" id="name" name="name" required
                    style="width: 100%; padding: 10px; border: 1px solid #0e0e0e; border-radius: 6px; color: #000;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="email" style="font-weight: bold; display: block; margin-bottom: 5px;">Email:</label>
                <input type="email" id="email" name="email" required
                    style="width: 100%; padding: 10px; border: 1px solid #0e0e0e; border-radius: 6px; color: #000;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="phone" style="font-weight: bold; display: block; margin-bottom: 5px;">Nomor Handphone:</label>
                <input type="tel" id="phone" name="phone" required
                    style="width: 100%; padding: 10px; border: 1px solid #0e0e0e; border-radius: 6px; color: #000;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="message" style="font-weight: bold; display: block; margin-bottom: 5px;">Pesan:</label>
                <textarea id="message" name="message" rows="4" required
                    style="width: 100%; padding: 10px; border: 1px solid #0e0e0e; border-radius: 6px; color:"></textarea>
                    <button type="submit"
                        style="width: 100%; background: #007bff; color: white; padding: 12px; border: none; border-radius: 6px; font-size: 16px; font-weight: bold; cursor: pointer; transition: 0.3s;"
                        onmouseover="this.style.background='#0056b3'" onmouseout="this.style.background='#007bff'">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- Alamat & Peta -->
            <div style="max-width: 700px; margin: 40px auto; padding: 20px;">
                <h2 style="font-weight: bold; margin-bottom: 10px;">Alamat Kami</h2>
                <p style="font-size: 16px; color: #555; margin-bottom: 15px;">Jl. Contoh No. 123, Jakarta, Indonesia</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.848899136488!2d110.36521957484448!3d-7.805589977032981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578b94d90e69%3A0x7f28f925c9c4e1b0!2sYogyakarta!5e0!3m2!1sen!2sid!4v1645600817736!5m2!1sen!2sid"
                    width="100%" height="300" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

            <!-- Kontak Sosial Media -->
            <div style="max-width: 700px; margin: 40px auto; padding: 20px;">
                <h2 style="font-weight: bold; margin-bottom: 10px;">Hubungi Kami Melalui -></h2>

                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/6281234567890" target="_blank"
                        style="display: flex; align-items: center; gap: 10px; background: #25D366; color: white; padding: 12px 20px; text-decoration: none; border-radius: 8px; font-size: 16px; font-weight: bold; transition: 0.3s;"
                        onmouseover="this.style.background='#1DA851'" onmouseout="this.style.background='#25D366'">
                        <img src="{{ asset('storage/image/logowa.jpg') }}" alt="WhatsApp"
                            style="width: 25px; height: 25px;">
                        WhatsApp
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/elfo.trans/" target="_blank"
                        style="display: flex; align-items: center; gap: 10px; background: #E4405F; color: white; padding: 12px 20px; text-decoration: none; border-radius: 8px; font-size: 16px; font-weight: bold; transition: 0.3s;"
                        onmouseover="this.style.background='#C13584'" onmouseout="this.style.background='#E4405F'">
                        <img src="{{ asset('storage/image/logoig.jpg') }}" alt="Instagram"
                            style="width: 25px; height: 25px;">
                        Instagram
                    </a>
                </div>
            </div>
            </action>
        </div>
    </div>
@endsection

