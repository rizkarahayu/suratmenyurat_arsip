<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DokSpph;
use App\Models\DokBaet;
use App\Models\DokBanh;
use App\Models\DokPemenang;
use App\Models\DokUsulan;
use App\Models\DokSpk;
use App\Models\DokSph;
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
        // return view('jurubeli.baet_download',compact( 'dok_baet')); 
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
        $dok_baet = DokBaet::find($id);
        set_time_limit(600);
        $pdf = PDF::loadview('jurubeli.baet_download', compact('dok_baet'))->setPaper('A4', 'potrait'); 
        return $pdf->download('baet.pdf');

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
        $dok_banh= DokBanh::find($id);
        set_time_limit(600);
        $pdf = PDF::loadview('jurubeli.banh_download', compact('dok_banh'))->setPaper('A4', 'potrait'); 
        return $pdf->download('banh.pdf');
        // return $pdf->stream('spph.pdf');
    }

    public function upload_banh($id)
    {
        $dok_banh = DokBanh::findOrFail($id);
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
   
    //Pemenang
    public function data_pemenang()
    {
        $dok_pemenang = Dokpemenang::paginate(10);
        return view('jurubeli.data_dok_pemenang', compact( 'dok_pemenang'));
    }

    public function create_pemenang()
    {
        $nama_subkon = User::get();
        $dok_pemenang = DokPemenang::paginate(10);
        return view('jurubeli.tambah_pemenang', compact(['dok_pemenang','nama_subkon']));
    }

    public function store_pemenang(Request $request)
    {
        $dok_pemenang                       = new DokPemenang;
        $dok_pemenang->deskripsi_singkat    = $request->input('deskripsi_singkat');
        $dok_pemenang->nama_proyek            = $request->input('nama_proyek');
        $dok_pemenang->nama_pemenang        = $request->input('nama_pemenang');
        $dok_pemenang->save();

        return redirect('/datapemenang')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    public function show_pemenang($id)
    {
        $dok_pemenang = DokPemenang::findOrFail($id);
        $nama_subkon = User::get();
        return view('jurubeli.detail_pemenang', compact(['dok_pemenang','nama_subkon'])); 
    }

    public function edit_pemenang($id)
    {
        $dok_pemenang = DokPemenang::findOrFail($id);
        $nama_subkon = User::get();
        return view('jurubeli.edit_pemenang', compact(['dok_pemenang','nama_subkon']));
    }

    public function update_pemenang($id,Request $request)
    {
        $dok_pemenang                       = DokPemenang::find($id);
        $dok_pemenang->deskripsi_singkat    = $request->input('deskripsi_singkat');
        $dok_pemenang->nama_proyek            = $request->input('nama_proyek');
        $dok_pemenang->nama_pemenang        = $request->input('nama_pemenang');
        $dok_pemenang->save();

        return redirect('/datapemenang')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    public function destroy_pemenang($id)
    {
        $dok_pemenang = DokPemenang::find($id);
        $dok_pemenang->delete();
        return redirect('/datapemenang')->with(['message'=> 'Data Berhasil di Hapus!!']);
    }

    //Pemenang
    public function data_usulan()
    {
        $dok_usulan = DokUsulan::paginate(10);
        return view('jurubeli.data_dok_usulan', compact( 'dok_usulan'));
    }

    public function create_usulan()
    {
        $dok_usulan = DokUsulan::paginate(10);
        return view('jurubeli.tambah_usulan', compact(['dok_usulan']));
    }

    public function store_usulan(Request $request)
    {
        $dok_usulan                       = new DokUsulan;
        $dok_usulan->no_memo              = $request->input('no_memo');
        $dok_usulan->referensi_j01        = $request->input('referensi_j01');
        $dok_usulan->save();

        return redirect('/datausulan')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    public function show_usulan($id)
    {
        $dok_usulan = DokUsulan::findOrFail($id);
        return view('jurubeli.detail_usulan', compact(['dok_usulan'])); 
    }

    public function edit_usulan($id)
    {
        $dok_usulan = DokUsulan::findOrFail($id);
        return view('jurubeli.edit_usulan', compact(['dok_usulan']));
    }

    public function update_usulan($id,Request $request)
    {
        $dok_usulan                       = DokUsulan::find($id);
        $dok_usulan->no_memo              = $request->input('no_memo');
        $dok_usulan->referensi_j01        = $request->input('referensi_j01');
        $dok_usulan->save();

        return redirect('/datausulan')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    public function destroy_usulan($id)
    {
        $dok_usulan = Dokusulan::find($id);
        $dok_usulan->delete();
        return redirect('/datausulan')->with(['message'=> 'Data Berhasil di Hapus!!']);
    }

    public function upload_usulan($id)
    {
        $dok_usulan = DokUsulan::findOrFail($id);
        return view('jurubeli.upload_usulan', compact(['dok_usulan']));
    }

    public function uploadstore_usulan($id,Request $request)
    {
        $dok_usulan = DokUsulan::find($id);
        $dok_usulan->keterangan= $request->input('keterangan');
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$extension;
        $file->move('uploads/usulan',$newName);
        $dok_usulan->file = $newName;
        $dok_usulan->save();
        // return redirect('/dataspph')->with(['message'=> 'Data Berhasil di Simpan!!']);  
        return redirect('/dok_usulan/upload_usulan/'.$id)->with(['message'=> 'Data Berhasil di Simpan!!']);    
    }

    public function data_sph()
    {
        $dok_sph = DokSph::paginate(10);
        return view('jurubeli.data_dok_sph', compact( 'dok_sph'));
    }

    //SPK
    public function data_spk()
    {
        $dok_spk = DokSpk::paginate(10);
        return view('jurubeli.data_dok_spk', compact( 'dok_spk'));
    }

    public function create_spk()
    {
        $nama_subkon = User::get();
        $dok_spk = DokSpk::paginate(10);
        return view('jurubeli.tambah_spk', compact(['dok_spk','nama_subkon']));
    }

    public function store_spk(Request $request)
    {
        $dok_spk                       = new DokSpk;
        $dok_spk->no_surat             = $request->input('no_surat');
        $dok_spk->no_sph               = $request->input('no_sph');
        $dok_spk->tanggal_sph          = $request->input('tanggal_sph');
        $dok_spk->no_baet              = $request->input('no_baet');
        $dok_spk->tanggal_baet         = $request->input('tanggal_baet');
        $dok_spk->no_banh              = $request->input('no_banh');
        $dok_spk->tanggal_banh         = $request->input('tanggal_banh');
        $dok_spk->nama_proyek            = $request->input('nama_proyek');
        $dok_spk->harga = $request->input('harga');
        $dok_spk->harga_terbilang = $request->input('harga_terbilang');
        $dok_spk->tanggal_dibuat       = $request->input('tanggal_dibuat');
        $dok_spk->tanggal_mulai       = $request->input('tanggal_mulai');
        $dok_spk->tanggal_selesai       = $request->input('tanggal_selesai');
        $dok_spk->nama_subkon          = $request->input('nama_subkon');
        $dok_spk->nama_perwakilan      = $request->input('nama_perwakilan');
        $dok_spk->tembusan1 = $request->input('tembusan1');
        $dok_spk->tembusan2 = $request->input('tembusan2');
        $dok_spk->tembusan3 = $request->input('tembusan3');
        $dok_spk->save();

        return redirect('/dataspk')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    public function show_spk($id)
    {
        $dok_spk = DokSpk::findOrFail($id);
        $nama_subkon = User::get();
        return view('jurubeli.detail_spk', compact(['dok_spk','nama_subkon'])); 
    }

    // public function show_sph($id)
    // {
    //     $dok_sph = DokSph::findOrFail($id);
    //     $nama_subkon = User::get();
    //     return view('jurubeli.sph_download', compact(['dok_sph','nama_subkon'])); 
    // }

    public function edit_spk($id)
    {
        $dok_spk = DokSpk::findOrFail($id);
        $nama_subkon = User::get();
        return view('jurubeli.edit_spk', compact(['dok_spk','nama_subkon']));
    }

    public function update_spk($id,Request $request)
    {
        $dok_spk                       = DokSpk::find($id);
        $dok_spk->no_surat             = $request->input('no_surat');
        $dok_spk->no_sph               = $request->input('no_sph');
        $dok_spk->tanggal_sph          = $request->input('tanggal_sph');
        $dok_spk->no_baet              = $request->input('no_baet');
        $dok_spk->tanggal_baet         = $request->input('tanggal_baet');
        $dok_spk->no_banh              = $request->input('no_banh');
        $dok_spk->tanggal_banh         = $request->input('tanggal_banh');
        $dok_spk->nama_proyek            = $request->input('nama_proyek');
        $dok_spk->harga                = $request->input('harga');
        $dok_spk->harga_terbilang      = $request->input('harga_terbilang');
        $dok_spk->tanggal_dibuat       = $request->input('tanggal_dibuat');
        $dok_spk->tanggal_mulai        = $request->input('tanggal_mulai');
        $dok_spk->tanggal_selesai      = $request->input('tanggal_selesai');
        $dok_spk->nama_subkon          = $request->input('nama_subkon');
        $dok_spk->nama_perwakilan      = $request->input('nama_perwakilan');
        $dok_spk->tembusan1 = $request->input('tembusan1');
        $dok_spk->tembusan2 = $request->input('tembusan2');
        $dok_spk->tembusan3 = $request->input('tembusan3');
        $dok_spk->save();

        return redirect('/dataspk')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    public function destroy_spk($id)
    {
        $dok_spk = DokSpk::find($id);
        $dok_spk->delete();
        return redirect('/dataspk')->with(['message'=> 'Data Berhasil di Hapus!!']);
    }

    public function cetak_pdf_spk($id)
    {
        $dok_spk= DokSpk::find($id);
        set_time_limit(600);
        $pdf = PDF::loadview('jurubeli.spk_download', compact('dok_spk'))->setPaper('A4', 'potrait'); 
        return $pdf->download('spk.pdf');
        // return $pdf->stream('spph.pdf');
    }

    public function cetak_pdf_sph($id)
    {
        $dok_sph= DokSph::find($id);
        set_time_limit(600);
        $pdf = PDF::loadview('jurubeli.sph_download', compact('dok_sph'))->setPaper('A4', 'potrait'); 
        return $pdf->download('sph.pdf');
        // return $pdf->stream('spph.pdf');
    }

    public function upload_spk($id)
    {
        $dok_spk = DokSpk::findOrFail($id);
        return view('jurubeli.upload_spk', compact(['dok_spk']));
    }

    public function uploadstore_spk($id,Request $request)
    {
        $dok_spk = DokSpk::find($id);
        $dok_spk->keterangan_spk= $request->input('keterangan_spk');
        $file_spk = $request->file('file_spk');
        $extension_spk = $file_spk->getClientOriginalExtension();
        $newNamespk = rand(100000,1001238912).".".$extension_spk;
        $file_spk->move('uploads/spk',$newNamespk);
        $dok_spk->file_spk = $newNamespk;
        //
        $dok_spk->keterangan_sper = $request->input('keterangan_sper');
        $file_sper = $request->file('file_sper');
        $extension_sper = $file_sper->getClientOriginalExtension();
        $newNamesper = rand(100000,1001238912).".".$extension_sper;
        $file_sper->move('uploads/spk',$newNamesper);
        $dok_spk->file_sper = $newNamesper;
        $dok_spk->save();
        // return redirect('/dataspph')->with(['message'=> 'Data Berhasil di Simpan!!']);  
        return redirect('/dok_spk/upload_spk/'.$id)->with(['message'=> 'Data Berhasil di Simpan!!']);    
    }

}
