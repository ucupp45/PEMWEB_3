<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KesehatanController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KonsultasController;

use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;

// Route::get('/export-siswa', function () {
//     return Excel::download(new SiswaExport, 'data_siswa.xlsx');
// });

Route::get('/export-siswa', [SiswaController::class, 'export'])->name('siswa.export');
Route::get('/export-guru', [GuruController::class, 'export'])->name('guru.export');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('siswa', SiswaController::class);
Route::resource('guru', GuruController::class);
Route::resource('pelajaran', PelajaranController::class);
Route::resource('nilai', NilaiController::class);
Route::resource('jadwal', JadwalController::class);
Route::resource('kesehatan', KesehatanController::class);
Route::resource('konsultasi', KonsultasController::class);

Route::get('/upload', [FileUploadController::class, 'create']);
Route::post('/upload', [FileUploadController::class, 'store']);

Route::get('/upload', [FileUploadController::class, 'showForm'])->name('file.upload.form');
Route::post('/upload', [FileUploadController::class, 'uploadFile'])->name('file.upload');

Route::post('/siswa/send-excel', [SiswaController::class, 'sendExcel'])->name('siswa.sendExcel');
require __DIR__.'/auth.php';
