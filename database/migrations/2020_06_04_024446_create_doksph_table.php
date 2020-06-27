<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoksphTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doksph', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat')->nullable();
            $table->timestamp('tanggal_dibuat')->nullable();
            $table->string('no_spph')->nullable();
            $table->date('tanggal_spph')->nullable();
            $table->text('deskripsi_pekerjaan')->nullable();
            $table->string('nama_proyek')->nullable();
            $table->integer('harga')->nullable();
            $table->string('terbilang')->nullable();
            $table->string('nama_subkon')->nullable();
            $table->string('nama_perwakilan')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('status')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('doksph');
    }
}
