<?php

namespace App\Http\Controllers;

use App\Models\konsultasi;
use Illuminate\Http\Request;

class KonsultasController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'guru_id' => 'required|exists:guru,id',
            'kategori' => 'required|string',
            'pesan' => 'required|string|max:255',
            'status' => 'required|in:proses,selesai',
        ]);

        konsultasi::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data konsultasi berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(konsultasi $konsultasi)
    {
        return view('dashboard', compact('konsultasi'));
    }
    public function update(Request $request, konsultasi $konsultasi)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'guru_id' => 'required|exists:guru,id',
            'kategori' => 'required|string',
            'pesan' => 'required|string|max:255',
            'status' => 'required|in:proses,selesai',
        ]);

        $konsultasi->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data konsultasi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(konsultasi $konsultasi)
    {
        $konsultasi->delete();
        return redirect()->route('dashboard')->with('success', 'Data konsultasi berhasil dihapus.');
    }
}
