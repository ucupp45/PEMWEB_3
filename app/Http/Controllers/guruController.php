<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index()
    {
        return view('guru.dash_guru');
    }
}
