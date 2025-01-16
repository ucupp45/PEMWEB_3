<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\jadwal;
use App\Models\kesehatan;
use App\Models\konsultasi;
use App\Models\nilai;
use App\Models\pelajaran;
use App\Models\siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        // Ambil keyword pencarian dari request
        $query = $request->input('search'); // Ambil input pencarian

        // Query untuk mendapatkan data siswa berdasarkan pencarian
        $search_siswa = Siswa::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('nama', 'LIKE', "%{$query}%")
                                ->orWhere('alamat', 'LIKE', "%{$query}%")
                                ->orWhere('gender', 'LIKE', "%{$query}%");
        })->get();

        // Jika permintaan berasal dari AJAX, kembalikan JSON
        if ($request->ajax()) {
            return response()->json(['siswa' => $search_siswa]);
        }


        $guru = guru::paginate(10);
        $gurus = guru::select('id as gurus_id', 'nama')->get();
        // $siswa = siswa::all();
        $siswas = siswa::select('id as siswas_id', 'nama')->get();
        $user = User::all(); // Query semua pengguna
        $pelajaran = pelajaran::paginate(10);
        $pelajarans = pelajaran::select('id as pelajarans_id', 'nama')->get();
        // Cek role pengguna yang sedang login

        $users = Auth::user(); // Ambil data pengguna yang sedang login

        // Jika role adalah admin atau guru, tampilkan semua data
        if ($users->hasRole(['admin', 'guru'])) {
            $nilai = Nilai::with('siswa', 'pelajaran')->orderBy('id', 'desc')->paginate(10);
        } else {
            // Jika bukan admin atau guru, tampilkan hanya nilai sesuai userss login
            $nilai = Nilai::whereHas('siswa', function ($query) use ($users) {
                $query->where('user_id', $users->id);
            })->with('siswa', 'pelajaran')->orderBy('id', 'desc')->paginate(10);
        }

        if ($users->hasRole(['admin', 'guru'])) {
            $kesehatan = Kesehatan::with('siswa')->orderBy('id', 'desc')->paginate(10);
        } else {
            // Jika bukan admin atau guru, tampilkan hanya data kesehatan sesuai users login
            $kesehatan = Kesehatan::whereHas('siswa', function ($query) use ($users) {
                $query->where('user_id', $users->id);
            })->with('siswa')->orderBy('id', 'desc')->paginate(10);
        }

        if ($users->hasRole(['admin', 'guru'])) {
            // Jika role adalah admin atau guru, tampilkan seluruh data siswa
            $siswa = Siswa::orderBy('id', 'desc')->paginate(10);
        } else {
            // Jika role adalah siswa, tampilkan hanya data siswa yang terkait user login
            $siswa = Siswa::where('user_id', $users->id)->orderBy('id', 'desc')->paginate(10);
        }

        $jadwal = jadwal::paginate(10);
        // $kesehatan = kesehatan::all();
        $konsultasi = konsultasi::paginate(10);



        // Kategorikan IMT
        $imtCategories = [
            'Kekurangan Berat Badan' => 0,
            'Normal' => 0,
            'Kelebihan Berat Badan' => 0,
            'Obesitas' => 0,
        ];

        foreach ($kesehatan as $data) {
            if ($data->imt < 18.5) {
                $imtCategories['Kekurangan Berat Badan']++;
            } elseif ($data->imt >= 18.5 && $data->imt < 24.9) {
                $imtCategories['Normal']++;
            } elseif ($data->imt >= 25 && $data->imt < 29.9) {
                $imtCategories['Kelebihan Berat Badan']++;
            } else {
                $imtCategories['Obesitas']++;
            }
        }

        // Siapkan data untuk grafik
        $labels = array_keys($imtCategories);
        $data = array_values($imtCategories);



        return view('dashboard', [
            'labels' => $labels,
            'data' => $data,
            'siswa' => $siswa,
            'search_siswa' => $search_siswa,
            'query' => $query,
            'siswas' => $siswas,
            'pelajaran' => $pelajaran,
            'pelajarans' => $pelajarans,
            'user' => $user,
            'guru' => $guru,
            'gurus' => $gurus,
            'nilai' => $nilai,
            'jadwal' => $jadwal,
            'konsultasi' => $konsultasi,
            'kesehatan' => $kesehatan,
        //     'sortBy' => $sortBy,
        //     'sortOrder' => $sortOrder,
        ]);
    }
}
