<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Nilai;
use App\Models\Pelajaran;
use App\Models\Siswa;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index()
    {
        return view('login.login_guru', [
            'title' => 'Login Guru'
        ]);
    }

    public function showAdminDashboard()
    {
        // Ambil semua data guru
        $gurus = Guru::all();
        dd($gurus);
        // Kirim data ke view 'admin.dash_admin'
        return view('admin.dash_admin', compact('gurus'));
    }

    public function dash_guru()
    {
        $data_siswa = Siswa::orderBy('id', 'desc')->paginate(5);
        $data_nilai = Nilai::with(['pelajaran', 'siswa'])->orderBy('id', 'desc')->paginate(5);
        // Prepare data for chart
        $averageNilai = Nilai::select('pelajaran_id', DB::raw('avg(nilai) as average_nilai'))
            ->groupBy('pelajaran_id')
            ->with('pelajaran') // Mengambil data pelajaran
            ->get();
        $jadwals = Jadwal::with(['pelajaran', 'ruangan'])->orderBy('id', 'desc')->paginate(10);

        return view('guru.dash_guru', compact('data_siswa', 'data_nilai', 'averageNilai','jadwals'));
    }

    // Menyimpan nilai baru
    public function create_nilai()
    {
        $siswa = Siswa::all(); // Ambil semua data siswa
        $pelajarans = Pelajaran::all(); // Ambil semua data pelajaran
        return view('guru.dash_guru', compact('siswa', 'pelajarans'));
    }

    // Menyimpan nilai baru
    public function store_nilai(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'pelajaran_id' => 'required|exists:pelajarans,id',
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        // Simpan data ke database
        Nilai::create($validated);

        // Redirect dengan pesan sukses
        return redirect()->route('guru.dash_guru')->with('success', 'Nilai berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit nilai
    public function edit_nilai($id)
    {
        // Mencari data nilai berdasarkan ID
        $nilai = Nilai::findOrFail($id);

        // Ambil semua data siswa dan pelajaran
        $siswa = Siswa::all();
        $pelajarans = Pelajaran::all();

        // Kirim data ke view 'edit_nilai'
        return view('guru.edit_nilai', compact('nilai', 'siswas', 'pelajarans'));
    }


    // // Memperbarui nilai yang sudah ada
    public function update_nilai(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'pelajaran_id' => 'required|exists:pelajarans,id',
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        // Cari nilai berdasarkan ID dan update data
        $nilai = Nilai::findOrFail($id);
        $nilai->update($validated);

        // Redirect ke halaman dashboard dengan pesan sukses
        return redirect()->route('guru.dash_guru')->with('success', 'Nilai berhasil diperbarui.');
    }

    // Menghapus nilai
    public function destroy($siswa_id, $pelajaran_id)
    {
        // Mencari nilai berdasarkan siswa_id dan pelajaran_id
        $nilai = Nilai::where('siswa_id', $siswa_id)
            ->where('pelajaran_id', $pelajaran_id)
            ->first();

        // Jika data ditemukan, hapus data nilai tersebut
        if ($nilai) {
            $nilai->delete();
            return redirect()->route('guru.dash_guru')->with('success', 'Nilai berhasil dihapus.');
        }

        // Jika data tidak ditemukan, tampilkan pesan error
        return redirect()->route('guru.dash_guru')->with('error', 'Nilai tidak ditemukan.');
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