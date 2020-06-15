<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokbanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokbanh', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat')->nullable();
            $table->timestamp('tanggal_dibuat')->nullable();
            $table->string('nama_subkon')->nullable();
            $table->string('nama_perwakilan')->nullable();
            $table->string('no_j01')->nullable();
            $table->string('no_proyek')->nullable();
            $table->string('kode_proyek')->nullable();
            $table->string('no_sph')->nullable();
            $table->date('tanggal_sph')->nullable();
            $table->string('no_baet')->nullable();
            $table->date('tanggal_baet')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('harga_nego1')->nullable();
            $table->integer('harga_nego2')->nullable();
            $table->integer('harga_nego3')->nullable();
            $table->integer('nilai_kontrak')->nullable();
            $table->string('nama_jurubeli1')->nullable();
            $table->string('nama_jurubeli2')->nullable();
            $table->string('nama_jurubeli3')->nullable();
            $table->string('file_banh')->nullable();
            $table->string('keterangan_banh')->nullable();
            $table->string('file_estimasi')->nullable();
            $table->string('keterangan_estimasi')->nullable();
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
        Schema::dropIfExists('dokbanh');
    }
}
