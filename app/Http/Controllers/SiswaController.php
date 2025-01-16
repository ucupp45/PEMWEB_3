<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;

class SiswaController extends Controller
{
    // public function index(Request $request)
    // {
    //     // Ambil keyword pencarian dari request
    // $search = $request->input('search');

    // // Query dengan filter pencarian dan pagination
    // $siswa = Siswa::where('nama', 'like', "%$search%")
    //     ->orWhere('alamat', 'like', "%$search%")
    //     ->paginate(10);
    // $user = User::all(); // Query semua pengguna
    
    // return view('dashboard', compact('siswa', 'user', 'search'));
    // }

    /**
     * Show the form for creating a new resource.
     */
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
            'nama_ortu' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
        ]);

        Siswa::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        return view('dashboard', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'gender' => 'required|in:P,L',
            'nama_ortu' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
        ]);

        $siswa->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('dashboard')->with('success', 'Data siswa berhasil dihapus.');
    }

    public function export()
    {
        return Excel::download(new SiswaExport, 'data_siswa.xlsx');
    }

}
