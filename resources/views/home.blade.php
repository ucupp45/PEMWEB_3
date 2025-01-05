@extends('layouts.main')

@section('container')
<style>
    body {
        background: linear-gradient(to bottom, #e4e4e4, #f38181);
        color: #333;
        font-family: 'Arial', sans-serif;
    }
    .hero {
        background: linear-gradient(to right, #f57e82, #fad0c4);
        padding: 80px 20px;
        color: white;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .features-icon {
        font-size: 50px;
        color: #f38181;
    }
    .btn-primary {
        background-color: #f38181;
        border: none;
    }
    .btn-primary:hover {
        background-color: #e57373;
    }
    .gradient-box {
        background: linear-gradient(to bottom right, #f0f0f0, #fcb69f);
        border-radius: 10px;
        padding: 20px;
        color: #333;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
    .footer {
        background: linear-gradient(to right, #1e1e1e, #212121);
        color: white;
        padding: 20px 0;
        text-align: center;
    }
</style>
</head>
<body>

<div class="container my-5">
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

</div>

<!-- Footer -->
<div class="footer">
<p>© 2025 SIMPA. Semua Hak Cipta Dilindungi.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>



@endsection

