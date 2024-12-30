<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('login.login_admin',[
            'title' => 'Login Admin'
        ]);
    }
}
