<?php

namespace App\Http\Controllers;

use App\Models\Subkontraktor;
use Illuminate\Http\Request;
use App\Models\DokSph;
use App\Models\DokSpph;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

    public function data_sph()
    {
        $dok_sph = DokSph::paginate(10);
        return view('sub_kontraktor.data_dok_sph', compact( 'dok_sph'));
    }

    public function create_sph()
    {
        $nama_subkon = User::get();
        $dok_sph = DokSph::paginate(10);
        return view('sub_kontraktor.tambah_sph', compact(['dok_sph','nama_subkon']));
    }

    public function store_sph(Request $request)
    {
        $dok_sph                       = new Doksph;
        $dok_sph->no_surat             = $request->input('no_surat');
        $dok_sph->tanggal_dibuat       = $request->input('tanggal_dibuat');
        $dok_sph->no_spph              = $request->input('no_spph');
        $dok_sph->tanggal_spph         = $request->input('tanggal_spph');
        $dok_sph->deskripsi_pekerjaan  = $request->input('deskripsi_pekerjaan');
        $dok_sph->nama_proyek          = $request->input('nama_proyek');
        $dok_sph->harga                = $request->input('harga');
        $dok_sph->terbilang            = $request->input('terbilang');
        $dok_sph->nama_subkon          = $request->input('nama_subkon');
        $dok_sph->nama_perwakilan      = $request->input('nama_perwakilan');
        $dok_sph->save();

        return redirect('/datasph')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    public function show_sph($id)
    {
        $dok_sph = DokSph::findOrFail($id);
        $nama_subkon = User::get();
        return view('sub_kontraktor.detail_sph', compact(['dok_sph','nama_subkon'])); 
    }

    public function edit_sph($id)
    {
        $dok_sph = DokSph::findOrFail($id);
        $nama_subkon = User::get();
        return view('sub_kontraktor.edit_sph', compact(['dok_sph','nama_subkon']));
    }

    public function update_sph($id,Request $request)
    {
        $dok_sph                       = DokSph::find($id);
        $dok_sph->no_surat             = $request->input('no_surat');
        $dok_sph->tanggal_dibuat       = $request->input('tanggal_dibuat');
        $dok_sph->no_spph              = $request->input('no_spph');
        $dok_sph->tanggal_spph         = $request->input('tanggal_spph');
        $dok_sph->deskripsi_pekerjaan  = $request->input('deskripsi_pekerjaan');
        $dok_sph->nama_proyek          = $request->input('nama_proyek');
        $dok_sph->harga                = $request->input('harga');
        $dok_sph->terbilang            = $request->input('terbilang');
        $dok_sph->nama_subkon          = $request->input('nama_subkon');
        $dok_sph->nama_perwakilan      = $request->input('nama_perwakilan');
        $dok_sph->save();

        return redirect('/datasph')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    public function destroy_sph($id)
    {
        $dok_sph = DokSph::find($id);
        $dok_sph->delete();
        return redirect('/datasph')->with(['message'=> 'Data Berhasil di Hapus!!']);
    }

    public function cetak_sph($id)
    {
        $dok_sph= DokSph::find($id);
        set_time_limit(600);
        $pdf = PDF::loadview('sub_kontraktor.sph_download', compact('dok_sph'))->setPaper('A4', 'potrait'); 
        return $pdf->download('sph.pdf');
        // return $pdf->stream('spph.pdf');
    }

    public function upload_sph($id)
    {
        $dok_sph = DokSph::findOrFail($id);
        return view('sub_kontraktor.upload_sph', compact(['dok_sph']));
    }

    public function uploadstore_sph($id,Request $request)
    {
        $dok_sph = DokSph::find($id);
        $dok_sph->keterangan = $request->input('keterangan');
        $dok_sph->status     = $request->input('status');
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$extension;
        $file->move('uploads/sph',$newName);
        $dok_sph->file = $newName;
        $dok_sph->save();
        // return redirect('/dataspph')->with(['message'=> 'Data Berhasil di Simpan!!']);  
        return redirect('/dok_sph/upload_sph/'.$id)->with(['message'=> 'Data Berhasil di Simpan!!']);    
    }

    public function data_spph()
    {
        $dok_spph = DokSpph::paginate(10);
        return view('sub_kontraktor.data_dok_spph', compact( 'dok_spph'));
    }


    public function cetak_spph($id)
    {
        $dok_spph= DokSpph::find($id);
        set_time_limit(600);
        $pdf = PDF::loadview('sub_kontraktor.spph_download', compact('dok_spph'))->setPaper('A4', 'potrait'); 
        return $pdf->download('spph.pdf');
        // return $pdf->stream('spph.pdf');
    }

    public function show_spph($id)
    {
        $dok_spph = DokSpph::find($id); 
        return view('sub_kontraktor.detail_spph',compact( 'dok_spph')); 
    }

}
