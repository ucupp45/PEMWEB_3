<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/signin.css">
    <title>SIMPA | {{ $title }}</title>

    <!-- Custom CSS for Sidebar -->
    <style>
        /* Ensuring the body and html take full height */
        html,
        body {
            height: 100%;
            margin: 0;
        }

        /* Sidebar Styling */
        .sidebar {
            position: fixed;
            /* Sidebar stays fixed on the left */
            top: 0;
            left: 0;
            width: 250px;
            /* Sidebar width */
            height: 100vh;
            /* Full height */
            background-color: #343a40;
            /* Dark background */
            padding-top: 20px;
            /* Space from the top */
            z-index: 1000;
            /* Ensure the sidebar is above other content */
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        /* Main content section */
        .main-content {
            margin-left: 250px;
            /* Offset the content to the right of the sidebar */
            padding: 20px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Siswa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Daftar Siswa</a></li>
                            <li><a class="dropdown-item" href="#">Nilai</a></li>
                            <li><a class="dropdown-item" href="#">Kesehatan</a></li>
                            <li><a class="dropdown-item" href="#">Konsultasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Guru
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Daftar Guru</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Teknis
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Jadwal</a></li>
                            <li><a class="dropdown-item" href="#">Mata Pelajaran</a></li>
                            <li><a class="dropdown-item" href="#">Ruangan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Daftar Admin</a></li>
                            <li><a class="dropdown-item" href="#">Daftar Teknisi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="container mt-5">
        <h1>Selamat datang di SIMPA</h1>
        <p>Konten utama halaman akan muncul di sini.</p>
    </div>

    <!-- Bootstrap Script and Dependencies (for collapse behavior) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
