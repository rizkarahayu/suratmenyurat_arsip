<?php

namespace App\Http\Controllers;

use App\Models\TimPengadaan;
use Illuminate\Http\Request;
use App\Models\DokSpph;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;

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
        return view('jurubeli.pengadaanHome');
    }

    public function data_spph()
    {
        $dok_spph = DokSpph::paginate(10);
        return view('tim_pengadaan.spph.data_dok_spph', compact( 'dok_spph'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nama_subkon = User::get();
        return view('tim_pengadaan.spph.tambah_spph',compact('nama_subkon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dok_spph = new DokSpph;
        $dok_spph->no_surat = $request->input('no_surat');
        $dok_spph->perihal = $request->input('perihal');
        $dok_spph->nama_subkon = $request->input('nama_subkon');
        $dok_spph->tanggal_dibuat = $request->input('tanggal_dibuat');
        $dok_spph->deskripsi_jasa = $request->input('deskripsi_jasa');
        $dok_spph->tanggal_pelaksanaan = $request->input('tanggal_pelaksanaan');
        $dok_spph->jam = $request->input('jam');
        // $dok_spph->keterangan = $request->input('keterangan');
        $dok_spph->save();

        return redirect('/dataspph')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimPengadaan  $timPengadaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dok_spph = DokSpph::find($id); 
        return view('tim_pengadaan.spph.spph_download',compact( 'dok_spph')); 
    }

    public function upload($id)
    {
        $dok_spph = DokSpph::findOrFail($id);
        return view('tim_pengadaan.spph.upload_spph', compact(['dok_spph']));
    }

    public function upload_spph($id,Request $request)
    {
        $dok_spph = DokSpph::find($id);
        $dok_spph->keterangan = $request->input('keterangan');
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('public')->put($file->getFilename().'.'.$extension,  File::get($file));


        $dok_spph->file = $file->getFilename().'.'.$extension;
        $dok_spph->save();
        return redirect('/dataspph')->with(['message'=> 'Data Berhasil di Simpan!!']);

    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cetak_pdf_spph($id)
    {
        $dok_spph= DokSpph::find($id);
        set_time_limit(600);
        $pdf = PDF::loadview('tim_pengadaan.spph.spph_download', compact('dok_spph'))->setPaper('A4', 'potrait'); 
        return $pdf->download('spph.pdf');
        // return $pdf->stream('spph.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimPengadaan  $timPengadaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dok_spph = DokSpph::findOrFail($id);
        return view('tim_pengadaan.spph.edit_spph', compact(['dok_spph']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimPengadaan  $timPengadaan
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $dok_spph = DokSpph::find($id);
        $dok_spph->no_surat = $request->input('no_surat');
        $dok_spph->perihal = $request->input('perihal');
        $dok_spph->nama_subkon = $request->input('nama_subkon');
        $dok_spph->tanggal_dibuat = $request->input('tanggal_dibuat');
        $dok_spph->deskripsi_jasa = $request->input('deskripsi_jasa');
        $dok_spph->tanggal_pelaksanaan = $request->input('tanggal_pelaksanaan');
        $dok_spph->jam = $request->input('jam');
        $dok_spph->save();

        return redirect('/dataspph')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimPengadaan  $timPengadaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dok_spph = DokSpph::find($id);
        $dok_spph->delete();
        return redirect('/dataspph')->with(['message'=> 'Data Berhasil di Hapus!!']);
    }
}
