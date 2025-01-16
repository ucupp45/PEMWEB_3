<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'pelajaran_id' => 'required|exists:pelajaran,id',
            'guru_id' => 'required|exists:guru,id',
            'ruangan' => 'required|string',
            'waktu_mulai' => 'required|date',
            'waktu_selesai' => 'required|date',
        ]);

        jadwal::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data jadwal berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jadwal $jadwal)
    {
        return view('dashboard', compact('jadwal'));
    }
    public function update(Request $request, jadwal $jadwal)
    {
        $request->validate([
            'pelajaran_id' => 'required|exists:pelajaran,id',
            'guru_id' => 'required|exists:guru,id',
            'ruangan' => 'required|string',
            'waktu_mulai' => 'required|date',
            'waktu_selesai' => 'required|date',
        ]);

        $jadwal->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data jadwal berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('dashboard')->with('success', 'Data jadwal berhasil dihapus.');
    }


}
