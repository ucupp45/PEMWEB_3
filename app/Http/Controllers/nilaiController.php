<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    // Menampilkan daftar nilai
    public function index()
    {
        $nilais = Nilai::with(['siswa', 'pelajaran'])->orderBy('id', 'desc')->paginate(10);
        return view('guru.dash_guru', compact('nilais'));
    }
}