@extends('layouts.main')

@section('container')
<!-- Menampilkan error login jika ada -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<main class="form-signin text-center">
    <h1 class="h3 fw-normal">Login Orang Tua</h1>
    <small>Masukkan NIK dan Password saat registrasi</small>

    <form method="POST" action="{{ route('siswa.login.submit') }}">
        @csrf

        <!-- NIK -->
        <div class="form-floating mt-2">
            <input type="text" class="form-control" id="nik" name="nik" placeholder="1234567890123456" required>
            <label for="nik">NIK Siswa</label>
        </div>

        <!-- Password -->
        <div class="form-floating mt-2">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>

        <!-- Tombol Login -->
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
    </form>
    
    <small class="d-block text-center mt-2">
        Belum memiliki akun? <a href="/reg">Registrasi</a>
    </small>
</main>
@endsection
