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
        $data_nilai = Nilai::with(['siswa', 'pelajaran'])->orderBy('id', 'desc')->paginate(10);
        return view('guru.dash_guru', compact('data_nilai'));
    }

    // Menampilkan form untuk menambahkan nilai baru
    public function create()
    {
        $siswas = Siswa::all();
        $pelajarans = Pelajaran::all();
        return view('guru.dash_guru', compact('siswas', 'pelajarans'));
    }

    // Menyimpan data nilai baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'pelajaran_id' => 'required|exists:pelajarans,id',
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        Nilai::create($validated);

        return redirect()->route('guru.dash_guru')->with('success', 'Nilai berhasil ditambahkan.');
    }

    // // Menampilkan form untuk mengedit nilai
    // public function edit($id)
    // {
    //     $nilai = Nilai::findOrFail($id);
    //     $siswas = Siswa::all();
    //     $pelajarans = Pelajaran::all();
    //     return view('nilai.edit', compact('nilai', 'siswas', 'pelajarans'));
    // }

    // // Memperbarui data nilai yang sudah ada
    // public function update(Request $request, $id)
    // {
    //     $validated = $request->validate([
    //         'siswa_id' => 'required|exists:siswas,id',
    //         'pelajaran_id' => 'required|exists:pelajarans,id',
    //         'nilai' => 'required|numeric|min:0|max:100',
    //     ]);

    //     $nilai = Nilai::findOrFail($id);
    //     $nilai->update($validated);

    //     return redirect()->route('nilai.index')->with('success', 'Nilai berhasil diperbarui.');
    // }

    // // Menghapus data nilai
    // public function destroy($id)
    // {
    //     $nilai = Nilai::findOrFail($id);
    //     $nilai->delete();

    //     return redirect()->route('nilai.index')->with('success', 'Nilai berhasil dihapus.');
    // }
}