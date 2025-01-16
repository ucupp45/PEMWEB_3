<?php

namespace App\Http\Controllers;


use App\Models\guru;
use Illuminate\Http\Request;
use App\Exports\GuruExport;
use Maatwebsite\Excel\Facades\Excel;

class GuruController extends Controller
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
            'user_id' => 'required|exists:users,id',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'gender' => 'required|in:P,L',
            'pendidikan' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
        ]);

        guru::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(guru $guru)
    {
        return view('dashboard', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, guru $guru)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'gender' => 'required|in:P,L',
            'pendidikan' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
        ]);

        $guru->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data guru berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(guru $guru)
    {
        $guru->delete();
        return redirect()->route('dashboard')->with('success', 'Data guru berhasil dihapus.');
    }

    public function export()
    {
        return Excel::download(new GuruExport, 'data_guru.xlsx');
    }
}
