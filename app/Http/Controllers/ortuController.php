<?php

namespace App\Http\Controllers;

use App\Models\siswa;
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

    public function dash_siswa()
    {
        return view('siswa.dash_siswa', [
            'title' => 'Dashboard Siswa'
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
            'password' => 'required|string|min:8',
        ]);

        // Enkripsi password
        $validated['password'] = Hash::make($validated['password']);

        siswa::create($validated);

        return redirect()->back()->with('success', 'Data siswa berhasil disimpan.');
    }

    public function showLoginForm()
    {
        return view('login.login_ortu'); // Pastikan file ini ada di folder resources/views/login
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nik' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cari siswa berdasarkan NIK
        $siswa = siswa::where('nik', $credentials['nik'])->first();

        if ($siswa && Hash::check($credentials['password'], $siswa->password)) {
            // Simpan data siswa di session
            $request->session()->put('siswa', $siswa);

            return redirect()->route('siswa.dash_siswa')->with('success', 'Berhasil login!');
        }

        return back()->withErrors(['login' => 'NIK atau Password salah.']);
    }

}
