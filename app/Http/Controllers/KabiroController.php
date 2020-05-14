<?php

namespace App\Http\Controllers;

use App\Models\Kabiro;
use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\User;

class KabiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kabiro.kabiroHome');
    }

    public function datasurat_masuk()
    {
        $kabiro= User::where('is_admin','kabiro')->get();
        $surat_masuk = SuratMasuk::paginate(10);
        return view('kabiro.datasurat_masuk', compact( 'surat_masuk','kabiro'));
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
     * @param  \App\Models\Kabiro  $kabiro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat_masuk_kabiro = SuratMasuk::find($id); 
        $nama_jurubeli = User::get();
        return view('kabiro.editsurat_masuk',compact( 'surat_masuk_kabiro','nama_jurubeli')); 
    }
    

    public function jenis_pengadaan($id,Request $request)
    {    
        $surat_masuk_kabiro = SuratMasuk::find($id);
        $surat_masuk_kabiro->jenis_pengadaan = $request->input('jenis_pengadaan');
        $surat_masuk_kabiro->juru_beli = $request->input('juru_beli');
        $surat_masuk_kabiro->save();
        
        if($surat_masuk_kabiro->jenis_pengadaan == 'pemilihan')
            return redirect('/edit_surat_pemilihan/'.$id)->with(['message'=> 'Form Edit Surat Pemilihan Langsung']);
        else{
            return redirect('/edit_surat_penunjukan/'.$id)->with(['message'=> 'Form Edit Surat Penunjukan Langsung']);
        }
    }


    public function pemilihan_langsung($id)
    {
        $surat_masuk_kabiro = SuratMasuk::findOrFail($id);
        return view('kabiro.editsurat_pemilihan', compact(['surat_masuk_kabiro']));
    }

    public function penunjukan_langsung($id)
    {
        $surat_masuk_kabiro = SuratMasuk::findOrFail($id);
        return view('kabiro.editsurat_penunjukan', compact(['surat_masuk_kabiro']));
    }

    public function update_penunjukan($id, Request $request)
    {
        $surat_masuk_kabiro = SuratMasuk::find($id);
        $surat_masuk_kabiro->tanggal_mulai_spph = $request->input('tanggal_mulai_spph');
        $surat_masuk_kabiro->tanggal_selesaispph = $request->input('tanggal_selesaispph');
        $surat_masuk_kabiro->tanggal_mulai_dokpenawaran = $request->input('tanggal_mulai_dokpenawaran');
        $surat_masuk_kabiro->tanggal_selesai_dokpenawaran = $request->input('tanggal_selesai_dokpenawaran');
        $surat_masuk_kabiro->tanggal_mulai_baet= $request->input('tanggal_mulai_baet');
        $surat_masuk_kabiro->tanggal_selesai_baet = $request->input('tanggal_selesai_baet');
        $surat_masuk_kabiro->tanggal_mulai_banh = $request->input('tanggal_mulai_banh');
        $surat_masuk_kabiro->tanggal_selesai_banh = $request->input('tanggal_selesai_banh');
        $surat_masuk_kabiro->tanggal_mulai_pemenang = $request->input('tanggal_mulai_pemenang');
        $surat_masuk_kabiro->tanggal_selesai_pemenang = $request->input('tanggal_selesai_pemenang');
        $surat_masuk_kabiro->tanggal_mulai_persetujuankontrak = $request->input('tanggal_mulai_persetujuankontrak');
        $surat_masuk_kabiro->tanggal_selesai_persetujuankontrak = $request->input('tanggal_selesai_persetujuankontrak');
        $surat_masuk_kabiro->status_surat_kabiro = $request->input('status_surat_kabiro');
        $surat_masuk_kabiro->save();
        return redirect('/surat_masuk_kabiro')->with(['message'=> 'Data Berhasil di Edit!!']);
    }

    public function update_pemilihan($id, Request $request)
    {
        $surat_masuk_kabiro = SuratMasuk::find($id);
        $surat_masuk_kabiro->tanggal_mulai_spph = $request->input('tanggal_mulai_spph');
        $surat_masuk_kabiro->tanggal_selesaispph = $request->input('tanggal_selesaispph');
        $surat_masuk_kabiro->tanggal_mulai_dokpenawaran = $request->input('tanggal_mulai_dokpenawaran');
        $surat_masuk_kabiro->tanggal_selesai_dokpenawaran = $request->input('tanggal_selesai_dokpenawaran');
        $surat_masuk_kabiro->tanggal_mulai_baet= $request->input('tanggal_mulai_baet');
        $surat_masuk_kabiro->tanggal_selesai_baet = $request->input('tanggal_selesai_baet');
        $surat_masuk_kabiro->tanggal_mulai_banh = $request->input('tanggal_mulai_banh');
        $surat_masuk_kabiro->tanggal_selesai_banh = $request->input('tanggal_selesai_banh');
        $surat_masuk_kabiro->tanggal_mulai_persetujuankontrak = $request->input('tanggal_mulai_persetujuankontrak');
        $surat_masuk_kabiro->tanggal_selesai_persetujuankontrak = $request->input('tanggal_selesai_persetujuankontrak');
        $surat_masuk_kabiro->status_surat_kabiro = $request->input('status_surat_kabiro');
        $surat_masuk_kabiro->save();
        return redirect('/surat_masuk_kabiro')->with(['message'=> 'Data Berhasil di Edit!!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kabiro  $kabiro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat_masuk_kabiro = SuratMasuk::find($id); 
        return view('kabiro.detailsurat_masuk_pemilihan',compact( 'surat_masuk_kabiro')); 
    }

    public function show_penunjukan($id)
    {
        $surat_masuk_kabiro = SuratMasuk::find($id); 
        return view('kabiro.detailsurat_masuk_penunjukan',compact( 'surat_masuk_kabiro')); 
    }

    public function show_pemilihan($id)
    {
        $surat_masuk_kabiro = SuratMasuk::find($id); 
        return view('kabiro.detailsurat_masuk_pemilihan',compact( 'surat_masuk_kabiro')); 
    }

    public function data_jurubeli()
    {
        $data_jurubeli = User::get();
        return view('kabiro.data_jurubeli', compact('data_jurubeli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kabiro  $kabiro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kabiro $kabiro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kabiro  $kabiro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kabiro $kabiro)
    {
        //
        $surat_masuk_kabiro = SuratMasuk::find($id);
        $surat_masuk_kabiro->delete();
        return redirect('/surat_masuk_kabiro')->with(['message'=> 'Data Berhasil di Hapus!!']);
    }
}
