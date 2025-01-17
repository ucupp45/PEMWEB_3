<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploadController extends Controller
{
    public function showForm()
    {
        return view('dashboard');
    }

    // Menghandle upload file
    public function uploadFile(Request $request)
    {
        // Validasi file
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048', // Validasi sesuai kebutuhan
        ]);

        // Ambil file dari request
        $file = $request->file('file');

        // Periksa apakah file ada
        if (!$file) {
            return back()->with('error', 'Tidak ada file yang diunggah');
        }

        // Generate nama file unik
        $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();

        // Simpan file ke direktori public/uploads
        $path = $file->move(public_path('uploads'), $fileName);

        // Kembalikan pesan berhasil
        return back()->with('success', 'File berhasil diunggah!')
                     ->with('filename', $fileName);
    }
}