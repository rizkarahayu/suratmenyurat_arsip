<?php

namespace App\Http\Controllers;

use App\Models\Subkontraktor;
use Illuminate\Http\Request;

class SubkontraktorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sub_kontraktor.subkontraktorHome');
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
     * @param  \App\Models\Subkontraktor  $subkontraktor
     * @return \Illuminate\Http\Response
     */
    public function show(Subkontraktor $subkontraktor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subkontraktor  $subkontraktor
     * @return \Illuminate\Http\Response
     */
    public function edit(Subkontraktor $subkontraktor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subkontraktor  $subkontraktor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subkontraktor $subkontraktor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subkontraktor  $subkontraktor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subkontraktor $subkontraktor)
    {
        //
    }
}
