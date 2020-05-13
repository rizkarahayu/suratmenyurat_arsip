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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimPengadaan  $timPengadaan
     * @return \Illuminate\Http\Response
     */
    public function show(TimPengadaan $timPengadaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimPengadaan  $timPengadaan
     * @return \Illuminate\Http\Response
     */
    public function edit(TimPengadaan $timPengadaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimPengadaan  $timPengadaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimPengadaan $timPengadaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimPengadaan  $timPengadaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimPengadaan $timPengadaan)
    {
        //
    }
}
