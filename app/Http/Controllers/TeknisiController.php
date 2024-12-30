<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teknisi;
use Illuminate\Support\Facades\Hash;

class TeknisiController extends Controller
{
    // Show registration form
    public function index()
    {
        return view('login.login_teknisi', [
            'title' => 'Login Teknisi'
        ]);
    }

    // Dashboard Teknisi
    public function dash_teknisi()
    {
        return view('teknisi.dash_teknisi', [
            'title' => 'Dashboard Teknisi'
        ]);
    }

    // Register new teknisi
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'nik' => 'required|unique:teknisis,nik',
            'nama' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'no_telepon' => 'nullable|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        // Hash password
        $validated['password'] = Hash::make($validated['password']);

        // Create new teknisi
        Teknisi::create($validated);

        return redirect()->back()->with('success', 'Teknisi registered successfully.');
    }

    // Show login form
    public function showLoginForm()
    {
        return view('login.login_teknisi');
    }

    // Login teknisi
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nik' => 'required|string',
            'password' => 'required|string',
        ]);

        $teknisi = Teknisi::where('nik', $credentials['nik'])->first();

        if ($teknisi && Hash::check($credentials['password'], $teknisi->password)) {
            // Store teknisi data in session
            $request->session()->put('teknisi', $teknisi);

            return redirect()->route('teknisi.dash_teknisi')->with('success', 'Login successful');
        }

        return back()->withErrors(['login' => 'Invalid NIK or Password.']);
    }
}
