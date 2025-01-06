@extends('layouts.main')

@section('container')
<!-- Hero Section -->
<div class="hero mb-5">
    <h1>Selamat Datang di SIMPA</h1>
    <p class="lead">Sistem Informasi dan Monitoring Perkembangan Anak PAUD</p>
    <p>SIMPA membantu guru dan orang tua memantau perkembangan anak dengan mudah dan terstruktur.</p>
    <a href="#features" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
</div>

<!-- Features Section -->
<div id="features" class="row text-center mb-5">
    <h2 class="mb-4">Fitur Unggulan SIMPA</h2>
    <div class="col-md-4">
        <div class="gradient-box">
            <i class="bi bi-person-badge features-icon"></i>
            <h4 class="my-3">Profil Anak</h4>
            <p>Kelola data lengkap anak, termasuk identitas, foto, dan informasi kesehatan.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="gradient-box">
            <i class="bi bi-bar-chart features-icon"></i>
            <h4 class="my-3">Pemantauan Perkembangan</h4>
            <p>Catat dan evaluasi perkembangan anak berdasarkan indikator PAUD.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="gradient-box">
            <i class="bi bi-people features-icon"></i>
            <h4 class="my-3">Kolaborasi Guru dan Orang Tua</h4>
            <p>Fasilitas komunikasi untuk mendukung perkembangan anak secara maksimal.</p>
        </div>
    </div>
</div>

<!-- How It Works Section -->
<div class="row align-items-center mb-5">
    <div class="col-md-12">
        <div class="gradient-box">
            <h2>Cara Kerja SIMPA</h2>
            <p>SIMPA dirancang untuk mempermudah pendataan dan pemantauan anak di lingkungan PAUD. Dengan antarmuka yang intuitif, guru dapat:</p>
            <ul>
                <li>Input dan akses data anak kapan saja.</li>
                <li>Mengikuti panduan perkembangan berdasarkan usia anak.</li>
                <li>Berkomunikasi dengan orang tua untuk hasil terbaik.</li>
            </ul>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div class="text-center my-5">
    <h2>Siap Memulai?</h2>
    <p class="mb-4">Bergabunglah dengan SIMPA dan jadikan pemantauan perkembangan anak lebih terstruktur dan menyenangkan.</p>
    <a href="/register" class="btn btn-primary btn-lg">Daftar Sekarang</a>
</div>

<!-- Footer -->
<div class="footer mt-5">
    <p>© 2025 SIMPA. Semua Hak Cipta Dilindungi.</p>
</div>



@endsection