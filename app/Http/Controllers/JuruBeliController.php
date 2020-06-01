<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokSpph;
use App\Models\DokBaet;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

    public function show($id)
    {
        $dok_spph = DokSpph::find($id); 
        return view('jurubeli.detail_spph',compact( 'dok_spph')); 
    }

    public function edit($id)
    {
        $dok_spph = DokSpph::findOrFail($id);
        $nama_subkon = User::get();
        return view('jurubeli.edit_spph', compact(['dok_spph','nama_subkon']));
    }

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

    public function destroy($id)
    {
        $dok_spph = DokSpph::find($id);
        $dok_spph->delete();
        return redirect('/dataspph')->with(['message'=> 'Data Berhasil di Hapus!!']);
    }

    public function cetak_pdf_spph($id)
    {
        $dok_spph= DokSpph::find($id);
        set_time_limit(600);
        $pdf = PDF::loadview('jurubeli.spph_download', compact('dok_spph'))->setPaper('A4', 'potrait'); 
        return $pdf->download('spph.pdf');
        // return $pdf->stream('spph.pdf');
    }

    public function upload($id)
    {
        $dok_spph = DokSpph::findOrFail($id);
        return view('jurubeli.upload_spph', compact(['dok_spph']));
    }

    public function upload_spph($id,Request $request)
    {
        $dok_spph = DokSpph::find($id);
        $dok_spph->keterangan = $request->input('keterangan');
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$extension;
        $file->move('uploads/file',$newName);
        $dok_spph->file = $newName;
        $dok_spph->save();
        // return redirect('/dataspph')->with(['message'=> 'Data Berhasil di Simpan!!']);  
        return redirect('/dok_spph/upload/'.$id)->with(['message'=> 'Data Berhasil di Simpan!!']);    
    }


    public function data_baet()
    {
        $dok_baet = DokBaet::paginate(10);
        return view('jurubeli.data_dok_baet', compact( 'dok_baet'));
    }

    public function create_baet()
    {
        // $nama_subkon = User::get();
        return view('jurubeli.tambah_baet');
    }

    public function store_baet(Request $request)
    {
        $dok_baet                       = new DokBaet;
        $dok_baet->no_surat             = $request->input('no_surat');
        $dok_baet->perihal              = $request->input('perihal');
        $dok_baet->referensi_j01        = $request->input('referensi_j01');
        $dok_baet->tanggal_dibuat       = $request->input('tanggal_dibuat');
        $dok_baet->list_pekerjaan       = $request->input('list_pekerjaan');
        $dok_baet->keterangan_pekerjaan = $request->input('keterangan_pekerjaan');
        $dok_baet->tanggal_mulai        = $request->input('tanggal_mulai');
        $dok_baet->tanggal_selesai      = $request->input('tanggal_selesai');
        $dok_baet->keterangan_tanggal   = $request->input('keterangan_tanggal');
        $dok_baet->peralatan_subkon     = $request->input('peralatan_subkon');
        $dok_baet->peralatan_pal        = $request->input('peralatan_pal');
        $dok_baet->keterangan_peralatan = $request->input('keterangan_peralatan');
        $dok_baet->tertanda1            = $request->input('tertanda1');
        $dok_baet->tertanda2            = $request->input('tertanda2');
        $dok_baet->tertanda3            = $request->input('tertanda3');
        $dok_baet->tertanda4            = $request->input('tertanda4');
        $dok_baet->save();

        return redirect('/databaet')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    public function show_baet($id)
    {
        $dok_baet = DokBaet::find($id); 
        return view('jurubeli.detail_baet',compact( 'dok_baet')); 
    }

    public function edit_baet($id)
    {
        $dok_baet = DokBaet::findOrFail($id);
        return view('jurubeli.edit_baet', compact(['dok_baet']));
    }

    public function update_baet($id,Request $request)
    {
        $dok_baet                       = DokBaet::find($id);
        $dok_baet->no_surat             = $request->input('no_surat');
        $dok_baet->perihal              = $request->input('perihal');
        $dok_baet->referensi_j01        = $request->input('referensi_j01');
        $dok_baet->tanggal_dibuat       = $request->input('tanggal_dibuat');
        $dok_baet->list_pekerjaan       = $request->input('list_pekerjaan');
        $dok_baet->keterangan_pekerjaan = $request->input('keterangan_pekerjaan');
        $dok_baet->tanggal_mulai        = $request->input('tanggal_mulai');
        $dok_baet->tanggal_selesai      = $request->input('tanggal_selesai');
        $dok_baet->keterangan_tanggal   = $request->input('keterangan_tanggal');
        $dok_baet->peralatan_subkon     = $request->input('peralatan_subkon');
        $dok_baet->peralatan_pal        = $request->input('peralatan_pal');
        $dok_baet->keterangan_peralatan = $request->input('keterangan_peralatan');
        $dok_baet->tertanda1            = $request->input('tertanda1');
        $dok_baet->tertanda2            = $request->input('tertanda2');
        $dok_baet->tertanda3            = $request->input('tertanda3');
        $dok_baet->tertanda4            = $request->input('tertanda4');
        $dok_baet->save();

        return redirect('/databaet')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    public function destroy_baet($id)
    {
        $dok_baet = DokBaet::find($id);
        $dok_baet->delete();
        return redirect('/databaet')->with(['message'=> 'Data Berhasil di Hapus!!']);
    }

    public function cetak_pdf_baet($id)
    {
        $dok_spph= DokSpph::find($id);
        set_time_limit(600);
        $pdf = PDF::loadview('jurubeli.spph_download', compact('dok_spph'))->setPaper('A4', 'potrait'); 
        return $pdf->download('spph.pdf');
        // return $pdf->stream('spph.pdf');
    }

    public function upload_baet($id)
    {
        $dok_baet = DokBaet::findOrFail($id);
        return view('jurubeli.upload_baet', compact(['dok_baet']));
    }

    public function uploadstore_baet($id,Request $request)
    {
        $dok_baet = DokBaet::find($id);
        $dok_baet->keterangan_upload = $request->input('keterangan_upload');
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$extension;
        $file->move('uploads/baet',$newName);
        $dok_baet->file = $newName;
        $dok_baet->save();
        // return redirect('/dataspph')->with(['message'=> 'Data Berhasil di Simpan!!']);  
        return redirect('/dok_baet/upload_baet/'.$id)->with(['message'=> 'Data Berhasil di Simpan!!']);    
    }
}
