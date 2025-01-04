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
Route::post('/dash_admin/siswa', [adminController::class, 'storeSiswa'])->name('admin.storeSiswa');
Route::get('/siswa/{id}/edit', [adminController::class, 'editSiswa']);
Route::put('/dash_admin/siswa/{id}', [adminController::class, 'updateSiswa']);
Route::delete('/dash_admin/siswa/{id}', [adminController::class, 'destroySiswa'])->name('admin.destroySiswa');
// Route untuk mengelola Guru
Route::post('/dash_admin/storeGuru', [adminController::class, 'storeGuru'])->name('admin.storeGuru');
Route::get('/dash_admin/guru/{id}/edit', [adminController::class, 'editGuru'])->name('admin.editGuru');
Route::put('/dash_admin/guru/{id}', [adminController::class, 'updateGuru'])->name('admin.updateGuru');
Route::delete('/dash_admin/guru/{id}', [adminController::class, 'destroyGuru'])->name('admin.destroyGuru');

// Routes for Admin Management
Route::post('/dash_admin/storeAdmin', [AdminController::class, 'storeAdmin'])->name('admin.storeAdmin');
Route::get('/dash_admin/admin/{id}/edit', [AdminController::class, 'editAdmin'])->name('admin.editAdmin');
Route::put('/dash_admin/admin/{id}', [AdminController::class, 'updateAdmin'])->name('admin.updateAdmin');
Route::delete('/dash_admin/admin/{id}', [AdminController::class, 'destroyAdmin'])->name('admin.destroyAdmin');

Route::post('/dash_admin/storeTeknisi', [AdminController::class, 'storeTeknisi'])->name('admin.storeTeknisi');
Route::get('/dash_admin/teknisi/{id}/edit', [AdminController::class, 'editTeknisi'])->name('admin.editTeknisi');
Route::put('/dash_admin/teknisi/{id}', [AdminController::class, 'updateTeknisi'])->name('admin.updateTeknisi');
Route::delete('/dash_admin/Teknisi/{id}', [AdminController::class, 'destroyTeknisi'])->name('admin.destroyTeknisi');



Route::get('/teknisi', [TeknisiController::class, 'index']);
Route::get('/dash_teknisi', [TeknisiController::class, 'dash_teknisi'])->name('teknisi.dash_teknisi');
Route::post('/teknisi/store', [TeknisiController::class, 'store']);
Route::get('/login', [TeknisiController::class, 'showLoginForm'])->name('teknisi.login');
Route::post('/login/teknisi', [TeknisiController::class, 'login'])->name('teknisi.login.submit');
Route::post('/logout/teknisi', [TeknisiController::class, 'logout'])->name('teknisi.logout');



// Menampilkan data siswa 
// Route::resource('siswa', [siswaController::class,'index']);


