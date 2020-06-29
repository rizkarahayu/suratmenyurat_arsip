<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokPemenang;

class WelcomeController extends Controller
{
    public function index()
    {
        $dok_pemenang = DokPemenang::get();
        return view('welcome', compact( 'dok_pemenang'));
    }
}
