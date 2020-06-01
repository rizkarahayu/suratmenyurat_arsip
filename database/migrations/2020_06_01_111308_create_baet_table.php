<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baet', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat')->nullable();
            $table->string('perihal')->nullable();
            $table->string('referensi_j01')->nullable();
            $table->timestamp('tanggal_dibuat')->nullable();
            $table->text('list_pekerjaan')->nullable();
            $table->text('keterangan_pekerjaan')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->date('keterangan_tanggal')->nullable();
            $table->string('peralatan_subkon')->nullable();
            $table->string('peralatan_pal')->nullable();
            $table->string('keterangan_peralatan')->nullable();
            $table->string('tertanda1')->nullable();
            $table->string('tertanda2')->nullable();
            $table->string('tertanda3')->nullable();
            $table->string('tertanda4')->nullable();
            $table->string('file')->nullable();
            $table->string('keterangan_upload')->nullable();
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
        Schema::dropIfExists('baet');
    }
}
