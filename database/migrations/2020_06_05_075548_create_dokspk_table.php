<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokspkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokspk', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat')->nullable();
            $table->string('no_sph')->nullable();
            $table->date('tanggal_sph')->nullable();
            $table->string('no_baet')->nullable();
            $table->date('tanggal_baet')->nullable();
            $table->string('no_banh')->nullable();
            $table->date('tanggal_banh')->nullable();
            $table->string('nama_proyek')->nullable();
            $table->integer('harga')->nullable();
            $table->string('harga_terbilang')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->timestamp('tanggal_dibuat')->nullable();
            $table->string('nama_subkon')->nullable();
            $table->string('nama_perwakilan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('tembusan1')->nullable();
            $table->string('tembusan2')->nullable();
            $table->string('tembusan3')->nullable();
            $table->string('file_spk')->nullable();
            $table->string('keterangan_spk')->nullable();
            $table->string('file_sper')->nullable();
            $table->string('keterangan_sper')->nullable();
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
        Schema::dropIfExists('dokspk');
    }
}
