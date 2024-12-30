<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ortuController;


Route::get('/admin', [adminController::class, 'index']);
Route::get('/ortu', [ortuController::class, 'index']);
Route::post('/siswa/store', [ortuController::class, 'store']);

Route::get('/', function () {
    return view('home', [
      'title' => 'SIMPA'  
    ]);
});

Route::get('/guru', function () {
    return view('login.login_guru', [
        'title' => 'Login Guru'
    ]);
});


Route::get('/teknisi', function () {
    return view('login.login_teknisi',[
        'title' => 'Login Teknisi'
    ]);
});
Route::get('/reg', function () {
    return view('login.reg',[
        'title' => 'Registrasi'
    ]);
});
Route::get('/home', function () {
    return view('home');
});