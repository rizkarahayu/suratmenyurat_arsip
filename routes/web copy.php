<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>['auth','kadep']],function(){
    //surat masuk
    Route::get('/kadep', 'KadepController@index')->name('kadep');
    Route::get('/surat_masuk_kadep', 'KadepController@datasurat_masuk');
    Route::get('/surat_masuk_kadep2', 'KadepController@datasurat_masuk_bag2');
    Route::get('/editsurat_masuk_kadep/{id}', 'KadepController@edit');
    Route::get('/smasuk_kadep_editkabiro/{id}', 'KadepController@edit_kabiro');
    Route::post('/surat_masuk_kadep/update/{id}', 'KadepController@update');
    Route::post('/surat_masuk_kadep/update_kabiro/{id}', 'KadepController@update_kabiro');
    Route::get('/surat_masuk_kadep/show/{id}', 'KadepController@show');
    Route::get('/datapj_spk_kadep', 'KadepController@datapj');
    Route::get('/surat_masuk_kadep/show/penunjukan/{id}', 'KadepController@show_penunjukan');
    Route::get('/surat_masuk_kadep/show/pemilihan/{id}', 'KadepController@show_pemilihan');
});

// Route::get('/kabiro', 'KabiroController@index')->name('kabiro')->middleware('kabiro');
Route::group(['middleware'=>['auth','kabiro']],function(){
    //surat masuk
    Route::get('/kabiro', 'KabiroController@index')->name('kabiro');
    Route::get('/surat_masuk_kabiro', 'KabiroController@datasurat_masuk');
    Route::get('/surat_masuk_kabiro/edit/{id}', 'KabiroController@edit');
    Route::post('/surat_masuk_kabiro/jenis_pengadaan/{id}', 'KabiroController@jenis_pengadaan');
    Route::get('/surat_masuk_kabiro/delete/{id}', 'KabiroController@destroy');
    //show detail pengadaan
    Route::get('/surat_masuk_kabiro/show/penunjukan/{id}', 'KabiroController@show_penunjukan');
    Route::get('/surat_masuk_kabiro/show/pemilihan/{id}', 'KabiroController@show_pemilihan');
    //form pemilihan langsung
    Route::get('/edit_surat_pemilihan/{id}', 'KabiroController@pemilihan_langsung');
    Route::post('/surat_masuk_kabiro/update_pemilihan_langsung/{id}', 'KabiroController@update_pemilihan');
    //form pemilihan langsung
    Route::get('/edit_surat_penunjukan/{id}', 'KabiroController@penunjukan_langsung');
    Route::post('/surat_masuk_kabiro/update_penunjukan_langsung/{id}', 'KabiroController@update_penunjukan');
    Route::get('/data_jurubeli', 'KabiroController@data_jurubeli');
    
});

Route::group(['middleware'=>['auth','sekretaris']],function(){
    //surat masuk
    Route::get('/sekretaris', 'SekretarisController@index')->name('sekretaris');
    Route::get('/datasurat_masuk', 'SekretarisController@datasurat_masuk')->name('datasurat_masuk');
    Route::get('/tambahsurat_masuk', 'SekretarisController@create')->name('tambahsurat_masuk');
    Route::post('/tambahsurat_masuk/store', 'SekretarisController@store')->name('tambahsurat_masuk/store');
    Route::get('/editsurat_masuk/{id}', 'SekretarisController@edit');
    Route::post('/surat_masuk/update/{id}', 'SekretarisController@update');
    Route::get('/surat_masuk/delete/{id}', 'SekretarisController@destroy');
    Route::get('/surat_masuk/show/{id}', 'SekretarisController@show');
    //surat keluar
    Route::get('/datasurat_keluar', 'SekretarisController@datasurat_keluar');
    Route::get('tambahsurat_keluar', 'SekretarisController@tambah');
    Route::post('/tambahsurat_keluar/store', 'SekretarisController@store_keluar');
    Route::get('/editsurat_keluar/{id}', 'SekretarisController@edit_keluar');
    Route::post('/surat_keluar/update/{id}', 'SekretarisController@update_keluar');
    Route::get('/surat_keluar/delete/{id}', 'SekretarisController@delete');
    Route::get('/surat_keluar/show/{id}', 'SekretarisController@show_keluar');
    Route::get('/surat_keluar/show_manual/{id}', 'SekretarisController@show_keluar_manual');

    Route::get('/datapj_spk', 'SekretarisController@datapj');
});

Route::group(['middleware'=>['auth','jurubeli']],function(){
    Route::get('/jurubeli', 'JuruBeliController@index')->name('jurubeli');
    //SPPH
    Route::get('/dataspph', 'JuruBeliController@data_spph')->name('dataspph');
    Route::get('/tambah_spph', 'JuruBeliController@create');
    Route::post('/tambah_spph/store', 'JuruBeliController@store');
    Route::get('/edit_spph/{id}', 'JuruBeliController@edit');
    Route::post('/edit_spph/update/{id}', 'JuruBeliController@update');
    Route::get('/dok_spph/delete/{id}', 'JuruBeliController@destroy');
    Route::get('/dok_spph/show/{id}', 'JuruBeliController@show');
    Route::get('/dok_spph/download/{id}', 'JuruBeliController@cetak_pdf_spph');
    Route::get('/dok_spph/upload/{id}', 'JuruBeliController@upload');
    Route::post('/dok_spph/upload_store/{id}', 'JuruBeliController@upload_spph');
    //BAET
    Route::get('/databaet', 'JuruBeliController@data_baet')->name('databaet');
    Route::get('/tambah_baet', 'JuruBeliController@create_baet');
    Route::post('/tambah_baet/store', 'JuruBeliController@store_baet');
    Route::get('/edit_baet/{id}', 'JuruBeliController@edit_baet');
    Route::post('/edit_baet/update/{id}', 'JuruBeliController@update_baet');
    Route::get('/dok_baet/delete/{id}', 'JuruBeliController@destroy_baet');
    Route::get('/dok_baet/show/{id}', 'JuruBeliController@show_baet');
    // Route::get('/dok_spph/download/{id}', 'JuruBeliController@cetak_pdf_spph');
    Route::get('/dok_baet/upload_baet/{id}', 'JuruBeliController@upload_baet');
    Route::post('/dok_baet/uploadstore_baet/{id}', 'JuruBeliController@uploadstore_baet');
    //Konfirmasi SPH
    Route::get('/datasph', 'JuruBeliController@data_sph')->name('datasph');
    Route::get('/tambah_sph', 'JuruBeliController@create_sph');
    Route::post('/tambah_sph/store', 'JuruBeliController@store_sph');
    Route::get('/edit_sph/{id}', 'JuruBeliController@edit_sph');
    Route::post('/edit_sph/update/{id}', 'JuruBeliController@update_sph');
    Route::get('/dok_sph/delete/{id}', 'JuruBeliController@destroy_sph');
    Route::get('/dok_sph/show/{id}', 'JuruBeliController@show_sph');
    // // Route::get('/dok_spph/download/{id}', 'JuruBeliController@cetak_pdf_spph');
    Route::get('/dok_sph/upload_sph/{id}', 'JuruBeliController@upload_sph');
    Route::post('/dok_sph/uploadstore_sph/{id}', 'JuruBeliController@uploadstore_sph');
    //BANH
    Route::get('/databanh', 'JuruBeliController@data_banh')->name('databanh');
    Route::get('/tambah_banh', 'JuruBeliController@create_banh');
    Route::post('/tambah_banh/store', 'JuruBeliController@store_banh');
    Route::get('/edit_banh/{id}', 'JuruBeliController@edit_banh');
    Route::post('/edit_banh/update/{id}', 'JuruBeliController@update_banh');
    Route::get('/dok_banh/delete/{id}', 'JuruBeliController@destroy_banh');
    Route::get('/dok_banh/show/{id}', 'JuruBeliController@show_banh');
    // // Route::get('/dok_banh/download/{id}', 'JuruBeliController@cetak_pdf_banh');
    // Route::get('/dok_banh/upload_banh/{id}', 'JuruBeliController@upload_banh');
    // Route::post('/dok_banh/uploadstore_banh/{id}', 'JuruBeliController@uploadstore_banh');
    //Pemenang
    Route::get('/datapemenang', 'JuruBeliController@data_pemenang')->name('datapemenang');
    Route::get('/tambah_pemenang', 'JuruBeliController@create_pemenang');
    Route::post('/tambah_pemenang/store', 'JuruBeliController@store_pemenang');
    Route::get('/edit_pemenang/{id}', 'JuruBeliController@edit_pemenang');
    Route::post('/edit_pemenang/update/{id}', 'JuruBeliController@update_pemenang');
    Route::get('/dok_pemenang/delete/{id}', 'JuruBeliController@destroy_pemenang');
    Route::get('/dok_pemenang/show/{id}', 'JuruBeliController@show_pemenang');

    //usulan
    Route::get('/datausulan', 'JuruBeliController@data_usulan')->name('datausulan');
    Route::get('/tambah_usulan', 'JuruBeliController@create_usulan');
    Route::post('/tambah_usulan/store', 'JuruBeliController@store_usulan');
    Route::get('/edit_usulan/{id}', 'JuruBeliController@edit_usulan');
    Route::post('/edit_usulan/update/{id}', 'JuruBeliController@update_usulan');
    Route::get('/dok_usulan/delete/{id}', 'JuruBeliController@destroy_usulan');
    Route::get('/dok_usulan/show/{id}', 'JuruBeliController@show_usulan');
    Route::get('/dok_usulan/upload_usulan/{id}', 'JuruBeliController@upload_usulan');
    Route::post('/dok_usulan/uploadstore_usulan/{id}', 'JuruBeliController@uploadstore_usulan');

    //SPK
    Route::get('/dataspk', 'JuruBeliController@data_spk')->name('dataspk');
    Route::get('/tambah_spk', 'JuruBeliController@create_spk');
    Route::post('/tambah_spk/store', 'JuruBeliController@store_spk');
    Route::get('/edit_spk/{id}', 'JuruBeliController@edit_spk');
    Route::post('/edit_spk/update/{id}', 'JuruBeliController@update_spk');
    Route::get('/dok_spk/delete/{id}', 'JuruBeliController@destroy_spk');
    Route::get('/dok_spk/show/{id}', 'JuruBeliController@show_spk');
    // // Route::get('/dok_spk/download/{id}', 'JuruBeliController@cetak_pdf_spk');
    // Route::get('/dok_spk/upload_spk/{id}', 'JuruBeliController@upload_spk');
    // Route::post('/dok_spk/uploadstore_spk/{id}', 'JuruBeliController@uploadstore_spk');
});

Route::get('/subkontraktor', 'SubkontraktorController@index')->name('subkontraktor')->middleware('subkontraktor');

