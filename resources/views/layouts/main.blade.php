<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/signin.css">
    <title>SIMPA | {{$title}}</title>
    <style>
      body {
          background: linear-gradient(to bottom, #f4cfcf, #5927ff);
          font-family: 'Arial', sans-serif;
      }
      .hero {
          background: linear-gradient(to right, #5927ff, #fad0c4);
          padding: 60px 20px;
          color: white;
          text-align: center;
          border-radius: 10px;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }
      .features-icon {
          font-size: 50px;
          color: #5927ff;
      }
      .btn-primary {
          background-color: #5927ff;
          border: none;
      }
      .btn-primary:hover {
          background-color: #5927ff;
      }
      .gradient-box {
          background: linear-gradient(to bottom right, #ffecd2, #d9d9d9);
          border-radius: 10px;
          padding: 20px;
          color: #333;
          box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      }
      .footer {
          background: linear-gradient(to right, #5927ff, #5927ff);
          color: white;
          padding: 20px 0;
          text-align: center;
      }
  </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">{{$title}}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/">Home</a></li>
                    <li><a class="dropdown-item" href="/reg">Registrasi</a></li>
                  <li><a class="dropdown-item" href="/ortu">Orang Tua</a></li>
                  <li><a class="dropdown-item" href="/guru">Guru</a></li>
                  <li><a class="dropdown-item" href="/admin">Admin</a></li>
                  <li><a class="dropdown-item" href="/teknisi">Teknisi</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<div class="container mt-5">
    @yield('container')
</div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>