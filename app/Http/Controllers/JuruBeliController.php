<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuruBeliController extends Controller
{
    //

    public function index()
    {
        return view('jurubeli.pengadaanHome');
    }
}
