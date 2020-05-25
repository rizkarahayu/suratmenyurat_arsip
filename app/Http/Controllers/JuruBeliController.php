<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokSpph;

class JuruBeliController extends Controller
{
    //

    public function index()
    {
        return view('jurubeli.pengadaanHome');
    }

    public function data_spph()
    {
        $dok_spph = DokSpph::paginate(10);
        return view('jurubeli.data_dok_spph', compact( 'dok_spph'));
    }

    public function create()
    {
        $nama_subkon = User::get();
        return view('jurubeli.tambah_spph',compact('nama_subkon'));
    }

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

}
