@extends('layouts.main')

@section('container')
    <main class="form-signin text-center">
        <h1 class="h3 fw-normal">Registrasi Admin</h1>
        <form method="POST" action="/admin/store">
            @csrf

            <!-- NIK -->
            <div class="form-floating mt-1">
                <input type="text" class="form-control" id="nik" name="nik" placeholder="1234567890123456" required>
                <label for="nik">NIK</label>
            </div>

            <!-- Nama -->
            <div class="form-floating mt-1">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                <label for="nama">Nama Lengkap</label>
            </div>

            <!-- Password -->
            <div class="form-floating mt-1">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Registrasi</button>
        </form>
        <small class="d-block text-center mt-2 mb-5">Sudah memiliki akun? <a href="/admin">Login</a></small>
    </main>
@endsection
