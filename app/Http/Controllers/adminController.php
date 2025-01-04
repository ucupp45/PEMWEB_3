<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Teknisi;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    // Show registration form
    public function index()
    {
        return view('login.login_admin', [
            'title' => 'Login Admin'
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

    public function dash_admin()
    {
        $data_siswa = Siswa::orderBy('id', 'desc')->paginate(5);
        $data_guru = Guru::orderBy('id', 'desc')->paginate(5);   // Data guru
        $data_admin = Admin::orderBy('id', 'desc')->paginate(10);
        $data_teknisi = Teknisi::orderBy('id', 'desc')->paginate(10);

        return view('admin.dash_admin', compact('data_siswa', 'data_guru', 'data_admin', 'data_teknisi'));
    }


    // Register new admin
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'nik' => 'required|unique:admins,nik',
            'nama' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'no_telepon' => 'nullable|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        // Hash password
        $validated['password'] = Hash::make($validated['password']);

        // Create new admin
        Admin::create($validated);

        return redirect()->back()->with('success', 'Admin registered successfully.');
    }

    // Show login form
    public function showLoginForm()
    {
        return view('login.login_admin');
    }

    // Login admin
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nik' => 'required|string',
            'password' => 'required|string',
        ]);

        $admin = Admin::where('nik', $credentials['nik'])->first();

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            // Store admin data in session
            $request->session()->put('admin', $admin);

            return redirect()->route('admin.dash_admin')->with('success', 'Login successful');
        }

        return back()->withErrors(['login' => 'Invalid NIK or Password.']);
    }

    // Show Siswa Edit form (for AJAX)
    public function editSiswa($id)
    {
        $siswa = Siswa::findOrFail($id);
        return response()->json($siswa);
    }

    // Update Siswa
    public function updateSiswa(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $validated = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'nama_orang_tua' => 'required',
            'nomor_telepon' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
        ]);

        $siswa->update($validated);
        return redirect()->route('admin.dash_admin')->with('success', 'Siswa updated successfully');
    }

    // Delete Siswa
    public function destroySiswa($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('admin.dash_admin')->with('success', 'Siswa deleted successfully');
    }

    public function storeSiswa(Request $request)
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
    // Menyimpan data guru baru
    public function storeGuru(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'nuptk' => 'required|unique:guru,nuptk',
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|in:L,P',
            'nomor_telepon' => 'nullable|string|max:15',
            'alamat' => 'required',
            'password' => 'required|string|min:8',
        ]);

        // Hash the password
        $validated['password'] = Hash::make($validated['password']);

        // Create the new guru record
        Guru::create($validated);

        return redirect('/dash_admin')->with('success', 'Guru berhasil ditambahkan');
    }

    public function editGuru($id)
    {
        $guru = Guru::findOrFail($id);
        return response()->json($guru);
    }

    public function updateGuru(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        // Validate the request data
        $validated = $request->validate([
            'nuptk' => 'required',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'gender' => 'required',
            'nomor_telepon' => 'nullable',
            'alamat' => 'required',
        ]);

        // Update the guru record
        $guru->update($validated);

        return redirect('/dash_admin')->with('success', 'Guru berhasil diupdate');
    }

    public function destroyGuru($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect('/dash_admin')->with('success', 'Guru berhasil dihapus');
    }

     // Store new admin
     public function storeAdmin(Request $request)
     {
         // Validate the request
         $validated = $request->validate([
             'nik' => 'required|unique:admins,nik',
             'nama' => 'required|string|max:255',
             'gender' => 'required|in:L,P',
             'no_telepon' => 'nullable|string|max:15',
             'password' => 'required|string|min:8',
         ]);
 
         // Hash the password
         $validated['password'] = Hash::make($validated['password']);
 
         // Create new admin
         Admin::create($validated);
 
         return redirect()->route('admin.dash_admin')->with('success', 'Admin added successfully.');
     }
 
     // Show the edit admin form (for AJAX)
     public function editAdmin($id)
     {
         $admin = Admin::findOrFail($id);
         return response()->json($admin);
     }
 
     // Update admin
     public function updateAdmin(Request $request, $id)
     {
         $admin = Admin::findOrFail($id);
 
         // Validate the request
         $validated = $request->validate([
             'nik' => 'required',
             'nama' => 'required',
             'gender' => 'required',
             'no_telepon' => 'nullable|string|max:15',
         ]);
 
         // Update the admin record
         $admin->update($validated);
 
         return redirect()->route('admin.dash_admin')->with('success', 'Admin updated successfully.');
     }
 
     // Delete admin
     public function destroyAdmin($id)
     {
         $admin = Admin::findOrFail($id);
         $admin->delete();
 
         return redirect()->route('admin.dash_admin')->with('success', 'Admin deleted successfully.');
     }

     public function storeTeknisi(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:teknisis,nik',
            'nama' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'no_telepon' => 'nullable|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        Teknisi::create($validated);

        return redirect()->route('admin.dash_admin')->with('success', 'Teknisi berhasil ditambahkan.');
    }

    // Edit a Teknisi
    public function editTeknisi($id)
    {
        $teknisi = Teknisi::findOrFail($id);

        return response()->json($teknisi);
    }

    // Update a Teknisi
    public function updateTeknisi(Request $request, $id)
    {
        $teknisi = Teknisi::findOrFail($id);

        $validated = $request->validate([
            'nik' => 'required',
            'nama' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'no_telepon' => 'nullable|string|max:15',
        ]);

        $teknisi->update($validated);

        return redirect()->route('admin.dash_admin')->with('success', 'Teknisi berhasil diperbarui.');
    }

    // Delete a Teknisi
    public function destroyTeknisi($id)
    {
        $teknisi = Teknisi::findOrFail($id);
        $teknisi->delete();

        return redirect()->route('admin.dash_admin')->with('success', 'Teknisi berhasil dihapus.');
    }

}
