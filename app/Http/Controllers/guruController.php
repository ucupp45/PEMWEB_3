<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    public function index()
    {
        return view('login.login_guru', [
            'title' => 'Login Guru'
        ]);
    }

    #menampilkan data siswa
    public function dash_guru()
    {
        $data_siswa = Siswa::orderBy('id','desc')->paginate(5);
        return view('guru.dash_guru', compact('data_siswa'));

        return view('guru.dash_guru', compact([
            'title' => 'Dashboard Guru'
        , 'data_siswa']));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nuptk' => 'required|unique:guru,nuptk',
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|in:L,P',
            'nomor_telepon' => 'nullable|string|max:15',
            'alamat' => 'required|string',
            'password' => 'required|string|min:8', // Tambah validasi password
        ]);

        // Enkripsi password
        $validated['password'] = Hash::make($validated['password']);

        // Simpan data guru
        Guru::create($validated);

        return redirect()->back()->with('success', 'Data Guru berhasil disimpan.');
    }

    public function showLoginForm()
    {
        return view('login.login_guru', ['title' => 'Login Guru']); // Return the 'login_guru' view
    }

    // Process the login request
    public function login(Request $request)
    {
        // Validate the credentials
        $credentials = $request->validate([
            'nuptk' => 'required|string',
            'password' => 'required|string',
        ]);

        // Find the teacher by NUPTK
        $guru = Guru::where('nuptk', $credentials['nuptk'])->first();

        if ($guru && Hash::check($credentials['password'], $guru->password)) {
            // Store the teacher data in the session
            $request->session()->put('guru', $guru);

            return redirect()->route('guru.dash_guru')->with('success', 'Berhasil login!');
        }

        // If login fails
        return back()->withErrors(['login' => 'NUPTK atau Password salah.']);
    }
}
