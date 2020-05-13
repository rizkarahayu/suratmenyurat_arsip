<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluar', function (Blueprint $table) {
            //sekretaris
            $table->increments('id');
            $table->string('nomor_surat')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('nama_subkon')->nullable();
            $table->string('nama_ygambil')->nullable();
            $table->date('tanggal_diambil')->nullable();
            $table->string('pj_spk_sper')->nullable();
            $table->boolean('status')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suratkeluar');
    } 
}
