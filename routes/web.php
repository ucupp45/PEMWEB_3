<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ortuController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\siswaController;

// Rute untuk login dan registrasi

Route::get('/ortu', [ortuController::class, 'index']);
Route::get('/dash_siswa', [ortuController::class, 'dash_siswa'])->name('siswa.dash_siswa'); // Rute dashboard siswa
Route::post('/siswa/store', [ortuController::class, 'store']);
Route::get('/login', [ortuController::class, 'showLoginForm'])->name('siswa.login');
Route::post('/login/siswa', [ortuController::class, 'login'])->name('siswa.login.submit');
Route::post('/logout/siswa', [ortuController::class, 'logout'])->name('siswa.logout'); // Logout siswa

Route::get('/', function () {
    return view('home', ['title' => 'SIMPA']);
});

// Route::get('/guru', function () {
//     return view('login.login_guru', ['title' => 'Login Guru']);
// });

// Route::get('/teknisi', function () {
//     return view('login.login_teknisi', ['title' => 'Login Teknisi']);
// });

Route::get('/reg', function () {
    return view('login.reg', ['title' => 'Registrasi']);
});

Route::get('/regg', function () {
    return view('login.reguru', ['title' => 'Registrasi']);
});
Route::get('/reggg', function () {
    return view('login.regadmin', ['title' => 'Registrasi']);
});
