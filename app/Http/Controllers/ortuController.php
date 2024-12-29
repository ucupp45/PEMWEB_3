<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ortuController extends Controller
{
    public function index()
    {
        return view('login.login_ortu', [
            'title' => 'Login Orang Tua'
        ]);
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:siswa,nik',
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|in:L,P',
            'nama_orang_tua' => 'required|string|max:255',
            'nomor_telepon' => 'nullable|string|max:15',
            'alamat' => 'required|string',
            'password' => 'required|string|min:8', // Tambah validasi password
        ]);

        // Enkripsi password
        $validated['password'] = Hash::make($validated['password']);

        Siswa::create($validated);

        return redirect()->back()->with('success', 'Data siswa berhasil disimpan.');
    }


}
