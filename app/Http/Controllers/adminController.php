<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Guru;
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
        return view('admin.dash_admin', [
            'title' => 'Dashboard Admin'
        ]);
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

}
