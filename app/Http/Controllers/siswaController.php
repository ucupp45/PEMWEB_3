<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
<<<<<<< HEAD
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if (strlen($katakunci)){
            $data_siswa = Siswa::where('nik','like','%katakunci%')
                ->orWhere('nama','like','%katakunci') 
                ->paginate($jumlahbaris);  
        } else {
=======
>>>>>>> 72c34541cb5d3db9048e67e39a2eed161613c9bf
        $data_siswa = Siswa::orderBy('id','desc')->paginate(5);
        return view('guru.dash_guru', compact('data_siswa'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
