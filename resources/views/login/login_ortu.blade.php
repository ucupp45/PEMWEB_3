@extends('layouts.main')

@section('container')
<main class="form-signin text-center">
    <h1 class="h3 fw-normal">Login Orang Tua</h1>
    <small>Masukkan data anak anda</small>
    <form>
      {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
  
      <div class="form-floating mt-2">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">NIK Anak anda</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      {{-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> --}}
      <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
      {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
    </form>
    <small class="d-block text-center mt-2">Belum memiliki akun? <a href="/reg">Klik untuk registrasi</a></small>
  </main>



@endsection