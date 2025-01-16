<?php

namespace App\Http\Controllers;

use App\Models\pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required|exists:guru,id',
            'nama' => 'required|string|max:255',
            'ruangan' => 'required|string|max:255',
            'keterangan' => 'required|string',
        ]);

        pelajaran::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data pelajaran berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pelajaran $pelajaran)
    {
        return view('dashboard', compact('pelajaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pelajaran $pelajaran)
    {
        $request->validate([
            'guru_id' => 'required|exists:guru,id',
            'nama' => 'required|string|max:255',
            'ruangan' => 'required|string|max:255',
            'keterangan' => 'required|string',
        ]);

        $pelajaran->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data pelajaran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pelajaran $pelajaran)
    {
        $pelajaran->delete();
        return redirect()->route('dashboard')->with('success', 'Data pelajaran berhasil dihapus.');
    }
}
