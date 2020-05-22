<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokspphTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokspph', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_surat')->nullable();
            $table->string('perihal')->nullable();
            $table->string('nama_subkon')->nullable();
            $table->timestamp('tanggal_dibuat')->nullable();
            $table->string('deskripsi_jasa')->nullable();
            $table->date('tanggal_pelaksanaan')->nullable();
            $table->string('jam')->nullable();
            $table->string('file')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('dokspph');
    }
}
