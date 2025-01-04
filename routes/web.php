<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ortuController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\TeknisiController;



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
Route::get('/regggg', function () {
    return view('login.regteknisi', ['title' => 'Registrasi']);
});


Route::get('/guru', [GuruController::class, 'index']);
Route::get('/dash_guru', [GuruController::class, 'dash_guru'])->name('guru.dash_guru'); // Rute dashboard siswa
Route::post('/guru/store', [GuruController::class, 'store']);
Route::get('/login', [GuruController::class, 'showLoginForm'])->name('guru.login');
Route::post('/login/guru', [GuruController::class, 'login'])->name('guru.login.submit');
Route::post('/logout/guru', [GuruController::class, 'logout'])->name('guru.logout'); // Logout siswa

Route::get('/admin', [adminController::class, 'index']);
Route::get('/dash_admin', [adminController::class, 'dash_admin'])->name('admin.dash_admin'); // Rute dashboard admin
Route::post('/admin/store', [adminController::class, 'store']);
Route::get('/login', [adminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login/admin', [adminController::class, 'login'])->name('admin.login.submit');
Route::post('/logout/admin', [adminController::class, 'logout'])->name('admin.logout'); // Logout admin



Route::get('/teknisi', [TeknisiController::class, 'index']);
Route::get('/dash_teknisi', [TeknisiController::class, 'dash_teknisi'])->name('teknisi.dash_teknisi');
Route::post('/teknisi/store', [TeknisiController::class, 'store']);
Route::get('/login', [TeknisiController::class, 'showLoginForm'])->name('teknisi.login');
Route::post('/login/teknisi', [TeknisiController::class, 'login'])->name('teknisi.login.submit');
Route::post('/logout/teknisi', [TeknisiController::class, 'logout'])->name('teknisi.logout');
