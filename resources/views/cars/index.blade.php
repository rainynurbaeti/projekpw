@extends('layouts.app')

@section('content')
<h2 style="text-align: center; font-weight: bold; margin-bottom: 20px;">Daftar Mobil Tersedia</h2>

<!-- Informasi tentang RentalYuk -->
<div style="text-align: center; max-width: 800px; margin: 20px auto;">
    <p style="font-size: 16px; color: #555;">
        Selamat datang di <strong>RentalYuk</strong>! Kami menyediakan berbagai pilihan mobil berkualitas dengan harga terbaik.
        Sewa mobil dengan mudah dan nyaman untuk keperluan perjalanan Anda. Temukan kendaraan yang sesuai dengan kebutuhan Anda di sini!
    </p>
</div>
<div class="car-gallery">
    <img src="{{ asset('image/cvicjpg.jpg') }}" alt="Civic">
    <img src="{{ asset('image/images.jpg') }}" alt="Images">
    <img src="{{ asset('image/civic.jpg') }}" alt="Civic">
</div>
<!-- Daftar Mobil -->
<div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
    @foreach($cars as $car)
        <div style="
            background: white;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.15);
            width: 320px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
        " onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='4px 4px 20px rgba(0, 0, 0, 0.2)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='2px 2px 15px rgba(0, 0, 0, 0.15)';">
            
            <div style="position: relative; overflow: hidden; border-radius: 15px;">
                <img src="{{ asset('storage/cars/' . $car->image) }}" alt="{{ $car->name }}" style="
                    width: 100%;
                    height: 200px;
                    object-fit: cover;
                    border-top-left-radius: 15px;
                    border-top-right-radius: 15px;
                ">
            </div>

            <div style="padding: 15px;">
                <h3 style="margin: 10px 0; font-size: 18px; font-weight: bold;">{{ $car->name }}</h3>
                <p style="margin: 0; font-size: 14px; color: #666;">{{ $car->brand }}</p>
                <p style="color: #007bff; font-weight: bold; font-size: 16px; margin: 10px 0;">
                    Rp {{ number_format($car->price_per_day, 0, ',', '.') }} / hari
                </p>

                <a href="{{ route('cars.show', $car->id) }}" style="
                    display: inline-block;
                    background: #007bff;
                    color: white;
                    padding: 10px 15px;
                    text-decoration: none;
                    border-radius: 5px;
                    margin-bottom: 10px;
                    font-weight: bold;
                    transition: background 0.3s;
                " onmouseover="this.style.background='#0056b3'" onmouseout="this.style.background='#007bff'">
                    Lihat Detail
                </a>

                <button onclick="bookNow('{{ $car->name }}')" style="
                    display: block;
                    width: 100%;
                    background: #25D366;
                    color: white;
                    padding: 12px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    font-size: 16px;
                    font-weight: bold;
                    transition: background 0.3s;
                " onmouseover="this.style.background='#1DA851'" onmouseout="this.style.background='#25D366'">
                    Booking Now!
                </button>
            </div>
        </div>
    @endforeach
</div>

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