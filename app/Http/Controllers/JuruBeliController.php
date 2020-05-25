<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\DokSpph;

class JuruBeliController extends Controller
{
    //

    public function index()
    {
        return view('jurubeli.pengadaanHome');
    }

    // public function data_spph()
    // {
    //     $dok_spph = DokSpph::paginate(10);
    //     return view('jurubeli.spph.data_dok_spph', compact( 'dok_spph'));
    // }
}
