<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokSpph;
use App\Models\DokBaet;
use App\Models\DokBanh;
use App\Models\DokPemenang;
use App\Models\DokUsulan;
use App\Models\DokSpk;
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

        return redirect('/dok_spph/upload/'.$id)->with(['message'=> 'Data Berhasil di Simpan!!']);    
    }


    public function data_baet()
    {
        $dok_baet = DokBaet::paginate(10);
        return view('jurubeli.data_dok_baet', compact( 'dok_baet'));
    }

    public function create_baet()
    {
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

        return redirect('/dok_baet/upload_baet/'.$id)->with(['message'=> 'Data Berhasil di Simpan!!']);    
    }

    //BANH
    public function data_banh()
    {
        $dok_banh = DokBanh::paginate(10);
        return view('jurubeli.data_dok_banh', compact( 'dok_banh'));
    }

    public function create_banh()
    {
        $nama_subkon = User::get();
        $dok_banh = DokBanh::paginate(10);
        return view('jurubeli.tambah_banh', compact(['dok_banh','nama_subkon']));
    }

    public function store_banh(Request $request)
    {
        $dok_banh                       = new DokBanh;
        $dok_banh->no_surat              = $request->input('no_surat');
        $dok_banh->tanggal_dibuat       = $request->input('tanggal_dibuat');
        $dok_banh->nama_subkon          = $request->input('nama_subkon');
        $dok_banh->nama_perwakilan      = $request->input('nama_perwakilan');
        $dok_banh->no_j01               = $request->input('no_j01');
        $dok_banh->no_proyek            = $request->input('no_proyek');
        $dok_banh->kode_proyek = $request->input('kode_proyek');
        $dok_banh->no_sph = $request->input('no_sph');
        $dok_banh->tanggal_sph = $request->input('tanggal_sph');
        $dok_banh->no_baet = $request->input('no_baet');
        $dok_banh->tanggal_baet = $request->input('tanggal_baet');
        $dok_banh->harga = $request->input('harga');
        $dok_banh->harga_nego1 = $request->input('harga_nego1');
        $dok_banh->harga_nego2 = $request->input('harga_nego2');
        $dok_banh->harga_nego3 = $request->input('harga_nego3');
        $dok_banh->nilai_kontrak = $request->input('nilai_kontrak');
        $dok_banh->nama_jurubeli1 = $request->input('nama_jurubeli1');
        $dok_banh->nama_jurubeli2 = $request->input('nama_jurubeli2');
        $dok_banh->nama_jurubeli3 = $request->input('nama_jurubeli3');
        $dok_banh->save();

        return redirect('/databanh')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    public function show_banh($id)
    {
        $dok_banh = DokBanh::findOrFail($id);
        $nama_subkon = User::get();
        return view('jurubeli.detail_banh', compact(['dok_banh','nama_subkon'])); 
    }

    public function edit_banh($id)
    {
        $dok_banh = DokBanh::findOrFail($id);
        $nama_subkon = User::get();
        return view('jurubeli.edit_banh', compact(['dok_banh','nama_subkon']));
    }

    public function update_banh($id,Request $request)
    {
        $dok_banh                       = DokBanh::find($id);
        $dok_banh->no_surat              = $request->input('no_surat');
        $dok_banh->tanggal_dibuat       = $request->input('tanggal_dibuat');
        $dok_banh->nama_subkon          = $request->input('nama_subkon');
        $dok_banh->nama_perwakilan      = $request->input('nama_perwakilan');
        $dok_banh->no_j01               = $request->input('no_j01');
        $dok_banh->no_proyek            = $request->input('no_proyek');
        $dok_banh->kode_proyek = $request->input('kode_proyek');
        $dok_banh->no_sph = $request->input('no_sph');
        $dok_banh->tanggal_sph = $request->input('tanggal_sph');
        $dok_banh->no_baet = $request->input('no_baet');
        $dok_banh->tanggal_baet = $request->input('tanggal_baet');
        $dok_banh->harga = $request->input('harga');
        $dok_banh->harga_nego1 = $request->input('harga_nego1');
        $dok_banh->harga_nego2 = $request->input('harga_nego2');
        $dok_banh->harga_nego3 = $request->input('harga_nego3');
        $dok_banh->nilai_kontrak = $request->input('nilai_kontrak');
        $dok_banh->nama_jurubeli1 = $request->input('nama_jurubeli1');
        $dok_banh->nama_jurubeli2 = $request->input('nama_jurubeli2');
        $dok_banh->nama_jurubeli3 = $request->input('nama_jurubeli3');
        $dok_banh->save();

        return redirect('/databanh')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    public function destroy_banh($id)
    {
        $dok_banh = DokBanh::find($id);
        $dok_banh->delete();
        return redirect('/databanh')->with(['message'=> 'Data Berhasil di Hapus!!']);
    }

    public function cetak_pdf_banh($id)
    {
        $dok_spph= DokBanh::find($id);
        set_time_limit(600);
        $pdf = PDF::loadview('jurubeli.spph_download', compact('dok_spph'))->setPaper('A4', 'potrait'); 
        return $pdf->download('spph.pdf');
        // return $pdf->stream('spph.pdf');
    }

    public function upload_banh($id)
    {
        $dok_banh = DokSpk::findOrFail($id);
        return view('jurubeli.upload_banh', compact(['dok_banh']));
    }

    public function uploadstore_banh($id,Request $request)
    {
        $dok_banh = DokBanh::find($id);
        $dok_banh->keterangan_banh = $request->input('keterangan_banh');
        $file_banh = $request->file('file_banh');
        $extension_banh = $file_banh->getClientOriginalExtension();
        $newNamebanh = rand(100000,1001238912).".".$extension_banh;
        $file_banh->move('uploads/banh',$newNamebanh);
        $dok_banh->file_banh = $newNamebanh;
        //
        $dok_banh->keterangan_estimasi = $request->input('keterangan_estimasi');
        $file_estimasi = $request->file('file_estimasi');
        $extension_estimasi = $file_estimasi->getClientOriginalExtension();
        $newNameestimasi = rand(100000,1001238912).".".$extension_estimasi;
        $file_estimasi->move('uploads/banh',$newNameestimasi);
        $dok_banh->file_estimasi = $newNameestimasi;
        $dok_banh->save();
        // return redirect('/dataspph')->with(['message'=> 'Data Berhasil di Simpan!!']);  
        return redirect('/dok_banh/upload_banh/'.$id)->with(['message'=> 'Data Berhasil di Simpan!!']);    
    }
   

}
