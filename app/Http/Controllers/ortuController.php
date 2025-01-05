<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\Jadwal;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ortuController extends Controller
{

    public function showAdminDashboard()
    {
        // Ambil semua data siswa
        $siswas = siswa::all();

        // Kirim data ke view 'admin.dash_admin'
        return view('admin.dash_admin', compact('siswas'));
    }
    public function index()
    {
        return view('login.login_ortu', [
            'title' => 'Login Orang Tua'
        ]);
    }

    public function dash_siswa()
    {
        $siswas = siswa::paginate(10); // Ambil 10 data per halaman      
        $jadwals = Jadwal::with(['pelajaran', 'ruangan'])->paginate(10); // Ambil 10 data jadwal per halaman
        // $nilais = Nilai::with(['siswa', 'pelajaran', 'ruangan'])->paginate(10);
        $nilais = Nilai::with(['pelajaran', 'siswa'])->orderBy('id', 'desc')->paginate(10);
        // dd($siswas)
        return view('siswa.dash_siswa', compact('siswas', 'jadwals','nilais'));
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

    public function index_siswa()
    {
        // Mengambil semua data siswa dari database
        $siswa = Siswa::all();

        // Mengembalikan view dengan data siswa
        return view('guru.dash_guru ', compact('siswa'));
    }
}
