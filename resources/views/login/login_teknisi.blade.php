@extends('layouts.main')

@section('container')
    <main class="form-signin text-center">
        <h1 class="h3 fw-normal">Login Teknisi</h1>
        <form method="POST" action="{{ route('teknisi.login.submit') }}">
            @csrf

            <!-- NIK -->
            <div class="form-floating mt-1">
                <input type="text" class="form-control" id="nik" name="nik" placeholder="1234567890123456" required>
                <label for="nik">NIK</label>
            </div>

            <!-- Password -->
            <div class="form-floating mt-1">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            <small class="d-block text-center mt-2">
              Belum memiliki akun? <a href="/regggg">Registrasi</a>
          </small>
        </form>
    </main>
@endsection
