<?php

namespace App\Http\Controllers;

use App\Models\Kadep;
use App\Models\SuratMasuk;
use App\Models\User;
use Illuminate\Http\Request;

class KadepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kadep.kadepHome');
    }

    public function datasurat_masuk()
    {
        $surat_masuk = SuratMasuk::paginate(10);
        return view('kadep.datasurat_masuk', compact( 'surat_masuk'));
    }

    public function datasurat_masuk_bag2()
    {
        $surat_masuk = SuratMasuk::paginate(10);
        return view('kadep.datasurat_masuk2', compact( 'surat_masuk'));
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

    public function datapj()
    {
        $data_pj = User::get();
        return view('sekretaris.datapj_spk', compact('data_pj'));
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
     * @param  \App\Models\Kadep  $kadep
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $surat_masuk_sekretaris = SuratMasuk::find($id); 
        return view('sekretaris.detailsurat_masuk',compact( 'surat_masuk_sekretaris')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kadep  $kadep
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nama_kabiro= User::get();
        $surat_masuk_kadep= SuratMasuk::findOrFail($id);
        return view('kadep.editsurat_masuk', compact(['surat_masuk_kadep','nama_kabiro']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kadep  $kadep
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $surat_masuk_kadep= SuratMasuk::find($id);
        $surat_masuk_kadep->kodej01 = $surat_masuk_kadep->kodej01;
        $surat_masuk_kadep->kode_proyek = $surat_masuk_kadep->kode_proyek;
        $surat_masuk_kadep->deskripsi =  $surat_masuk_kadep->deskripsi ;
        $surat_masuk_kadep->tanggal_diterima = $surat_masuk_kadep->tanggal_diterima;
        $surat_masuk_kadep->status_surat = $request->input('status_surat');
        $surat_masuk_kadep->nama_pj = $request->input('nama_pj');
        $surat_masuk_kadep->save();
        return redirect('/surat_masuk_kadep')->with(['message'=> 'Data Berhasil di Edit!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kadep  $kadep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kadep $kadep)
    {
        //
    }
}
