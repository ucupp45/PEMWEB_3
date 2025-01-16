<?php

namespace App\Http\Controllers;

use App\Models\kesehatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KesehatanController extends Controller
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
            'siswa_id' => 'required|exists:siswa,id',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'imt' => 'required|numeric',
            'keterangan' => 'required|string|max:255',
        ]);

        kesehatan::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data kesehatan berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kesehatan $kesehatan)
    {
        return view('dashboard', compact('kesehatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kesehatan $kesehatan)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'imt' => 'required|numeric',
            'keterangan' => 'required|string|max:255',
        ]);

        $kesehatan->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data kesehatan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kesehatan $kesehatan)
    {
        $kesehatan->delete();
        return redirect()->route('dashboard')->with('success', 'Data kesehatan berhasil dihapus.');
    }

    public function grafikPerkembanganKesehatan(Request $request)
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login

        // Ambil data kesehatan untuk siswa yang sedang login
        $kesehatanData = Kesehatan::where('siswa_id', $user->id)->orderBy('updated_at')->get();

        // Pastikan data tidak kosong
        if ($kesehatanData->isEmpty()) {
            return view('grafik_perkembangan_kesehatan', [
                'labels' => [],
                'data' => [],
            ]);
        }

        // Siapkan data untuk grafik
        $labels = [];
        $data = [];

        foreach ($kesehatanData as $dataKesehatan) {
            $labels[] = $dataKesehatan->updated_at->format('Y-m-d H:i'); // Format timestamp
            $data[] = $dataKesehatan->nilai_kesehatan; // Asumsikan ada kolom nilai_kesehatan
        }

        return view('grafik_perkembangan_kesehatan', [
            'labels' => $labels,
            'data' => $data,
        ]);
    }
}
