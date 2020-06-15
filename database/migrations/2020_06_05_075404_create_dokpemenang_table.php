<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokpemenangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokpemenang', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi_singkat')->nullable();
            $table->string('nama_proyek')->nullable();
            $table->string('nama_pemenang')->nullable();
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
        Schema::dropIfExists('dokpemenang');
    }
}
