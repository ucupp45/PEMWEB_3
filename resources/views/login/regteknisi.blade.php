@extends('layouts.main')

@section('container')
    <main class="form-signin text-center">
        <h1 class="h3 fw-normal">Registrasi Teknisi</h1>
        <form method="POST" action="/teknisi/store">
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

            <!-- Gender -->
            <div class="form-floating mt-1">
                <select class="form-control" id="gender" name="gender" required>
                    <option value="" disabled selected>Pilih Gender</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <label for="gender">Gender</label>
            </div>

            <!-- Nomor Telepon -->
            <div class="form-floating mt-1">
                <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="081234567890" required>
                <label for="no_telepon">Nomor Telepon</label>
            </div>

            <!-- Password -->
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Registrasi</button>
        </form>
        <small class="d-block text-center mt-2">
            Sudah punya akun? <a href="/teknisi">Login</a>
        </small>
    </main>
@endsection
