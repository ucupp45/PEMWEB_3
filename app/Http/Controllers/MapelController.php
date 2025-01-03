<?php

namespace App\Http\Controllers;

use App\Models\mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MapelController extends Controller
{
    public function index()
    {
        $mapel = mapel::get();

        return view('guru.mapel', compact([
            'mapel'
        ]));

        // Ambil semua data mata pelajaran

    }
}
