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
Route::get('/timpengadaan', 'TimpengadaanController@index')->name('timpengadaan')->middleware('timpengadaan');
Route::get('/subkontraktor', 'SubkontraktorController@index')->name('subkontraktor')->middleware('subkontraktor');

