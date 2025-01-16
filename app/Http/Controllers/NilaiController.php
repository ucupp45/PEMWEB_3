<?php

namespace App\Http\Controllers;

use App\Models\nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'pelajaran_id' => 'required|exists:pelajaran,id',
            'siswa_id' => 'required|exists:siswa,id',
            'nilai' => 'required|numeric',
            'kategori' => 'required|string',
            'keterangan' => 'required|string|max:255',
        ]);

        nilai::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data nilai berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nilai $nilai)
    {
        return view('dashboard', compact('nilai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, nilai $nilai)
    {
        $request->validate([
            'pelajaran_id' => 'required|exists:pelajaran,id',
            'siswa_id' => 'required|exists:siswa,id',
            'nilai' => 'required|numeric',
            'kategori' => 'required|string',
            'keterangan' => 'required|string|max:255',
        ]);

        $nilai->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data nilai berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nilai $nilai)
    {
        $nilai->delete();
        return redirect()->route('dashboard')->with('success', 'Data nilai berhasil dihapus.');
    }


}
