<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Sekretaris;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\User;
use Illuminate\Http\Request;

class SekretarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sekretaris.sekretarisHome');
    }

    public function datasurat_masuk()
    {
        $surat_masuk = SuratMasuk::paginate(10);
        return view('sekretaris.datasurat_masuk', compact( 'surat_masuk'));
    }

    public function datapj()
    {
        $data_pj = User::get();
        return view('sekretaris.datapj_spk', compact('data_pj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekretaris.tambahsurat_masuk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surat_masuk_sekretaris = new SuratMasuk;
        $surat_masuk_sekretaris->kodej01 = $request->input('kodej01');
        $surat_masuk_sekretaris->kode_proyek = $request->input('kode_proyek');
        $surat_masuk_sekretaris->deskripsi = $request->input('deskripsi');
        $surat_masuk_sekretaris->tanggal_diterima = $request->input('tanggal_diterima');
        $surat_masuk_sekretaris->save();

        return redirect('/datasurat_masuk')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sekretaris  $sekretaris
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $surat_masuk_sekretaris = SuratMasuk::where('id', $id)->get();
        $surat_masuk_sekretaris = SuratMasuk::find($id); 
        return view('sekretaris.detailsurat_masuk',compact( 'surat_masuk_sekretaris')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sekretaris  $sekretaris
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat_masuk_sekretaris = SuratMasuk::findOrFail($id);
        return view('sekretaris.editsurat_masuk', compact(['surat_masuk_sekretaris']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sekretaris  $sekretaris
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {    
        $surat_masuk_sekretaris = SuratMasuk::find($id);
        $surat_masuk_sekretaris->kodej01 = $request->input('kodej01');
        $surat_masuk_sekretaris->kode_proyek = $request->input('kode_proyek');
        $surat_masuk_sekretaris->deskripsi = $request->input('deskripsi');
        $surat_masuk_sekretaris->tanggal_diterima = $request->input('tanggal_diterima');
        $surat_masuk_sekretaris->save();
        return redirect('/datasurat_masuk')->with(['message'=> 'Data Berhasil di Edit!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sekretaris  $sekretaris
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat_masuk_sekretaris = SuratMasuk::find($id);
        $surat_masuk_sekretaris->delete();
        return redirect('/datasurat_masuk')->with(['message'=> 'Data Berhasil di Hapus!!']);
    }

    public function datasurat_keluar()
    {
        // $surat_keluar_sekretaris = SuratKeluar::paginate(10);
        // return view('sekretaris.datasurat_keluar', compact( 'surat_keluar_sekretaris'));
        $surat_masuk = SuratMasuk::paginate(10);
        return view('sekretaris.datasurat_keluar', compact( 'surat_masuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        // $nama_subkon = Auth::user();
        // $id = Auth::user()->id;
        $nama_subkon = User::get();
        return view('sekretaris.tambahsurat_keluar', compact('nama_subkon'));
        // return view('sekretaris.tambahsurat_keluar')>with('nama_subkon',$nama_subkon);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_keluar(Request $request)
    {
        $surat_keluar_sekretaris = new SuratKeluar;
        $surat_keluar_sekretaris->nomor_surat = $request->input('nomor_surat');
        $surat_keluar_sekretaris->nama_subkon = $request->input('nama_subkon');
        $surat_keluar_sekretaris->deskripsi = $request->input('deskripsi');
        $surat_keluar_sekretaris->nama_ygambil = $request->input('nama_ygambil');
        $surat_keluar_sekretaris->tanggal_diambil = $request->input('tanggal_diambil');
        $surat_keluar_sekretaris->pj_spk_sper = $request->input('pj_spk_sper');
        $surat_keluar_sekretaris->status = $request->input('status');
        $surat_keluar_sekretaris->save();

        return redirect('/datasurat_keluar')->with(['message'=> 'Data Berhasil di Simpan!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sekretaris  $sekretaris
     * @return \Illuminate\Http\Response
     */
    public function show_keluar($id)
    {
        // $surat_keluar_sekretaris = SuratKeluar::find($id); 
        // return view('sekretaris.detailsurat_keluar',compact( 'surat_keluar_sekretaris')); 
        $surat_masuk_sekretaris = SuratMasuk::find($id); 
        return view('sekretaris.detailsurat_keluar',compact( 'surat_masuk_sekretaris')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sekretaris  $sekretaris
     * @return \Illuminate\Http\Response
     */
    public function edit_keluar($id)
    {
        $nama_subkon = User::get();
        $surat_keluar_sekretaris = SuratKeluar::findOrFail($id);
        return view('sekretaris.editsurat_keluar', compact(['surat_keluar_sekretaris','nama_subkon']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sekretaris  $sekretaris
     * @return \Illuminate\Http\Response
     */
    public function update_keluar($id,Request $request)
    {    
        $surat_keluar_sekretaris = SuratKeluar::find($id);
        $surat_keluar_sekretaris->nomor_surat = $request->input('nomor_surat');
        $surat_keluar_sekretaris->nama_subkon = $request->input('nama_subkon');
        $surat_keluar_sekretaris->deskripsi = $request->input('deskripsi');
        $surat_keluar_sekretaris->nama_ygambil = $request->input('nama_ygambil');
        $surat_keluar_sekretaris->tanggal_diambil = $request->input('tanggal_diambil');
        $surat_keluar_sekretaris->pj_spk_sper = $request->input('pj_spk_sper');
        $surat_keluar_sekretaris->status = $request->input('status');
        $surat_keluar_sekretaris->save();
        return redirect('/datasurat_keluar')->with(['message'=> 'Data Berhasil di Edit!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sekretaris  $sekretaris
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $surat_keluar_sekretaris = SuratKeluar::find($id);
        $surat_keluar_sekretaris->delete();
        return redirect('/datasurat_keluar')->with(['message'=> 'Data Berhasil di Hapus!!']);
    }
}
