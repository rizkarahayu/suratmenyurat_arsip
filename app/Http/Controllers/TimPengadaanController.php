<?php

namespace App\Http\Controllers;

use App\Models\TimPengadaan;
use Illuminate\Http\Request;

class TimPengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tim_pengadaan.pengadaanHome');
    }

    
}
