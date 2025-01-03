@extends('layouts.main')

@section('container')
    <main class="form-signin text-center">
        <h1 class="h3 fw-normal">Registrasi Guru</h1>
        <small>Masukkan data guru di bawah ini</small>
        <form method="POST" action="/guru/store">
            <!-- Tambahkan CSRF Token untuk keamanan -->
            @csrf

            <!-- NUPTK -->
            <div class="form-floating mt-1">
                <input type="text" class="form-control" id="nuptk" name="nuptk" placeholder="1234567890" required>
                <label for="nuptk">NUPTK Guru</label>
            </div>

            <!-- Nama -->
            <div class="form-floating mt-1">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                <label for="nama">Nama Lengkap</label>
            </div>

            <!-- Tanggal Lahir -->
            <div class="form-floating mt-1">
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                <label for="tanggal_lahir">Tanggal Lahir</label>
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
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="081234567890" required>
                <label for="nomor_telepon">Nomor Telepon</label>
            </div>

            <!-- Password -->
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <!-- Alamat -->
            <div class="form-floating mt-1">
                <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap" style="height: 100px;" required></textarea>
                <label for="alamat">Alamat</label>
            </div>

            <!-- Tombol Registrasi -->
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Registrasi</button>
        </form>
        <small class="d-block text-center mt-2 mb-5">Sudah punya akun? <a href="/guru">Login</a></small>
    </main>
@endsection
