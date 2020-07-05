<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DokSpkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dokspk', function (Blueprint $table) {
            $table->string('no_sper')->after('keterangan_sper')->nullable();
            $table->string('referensi_j01')->after('no_sper')->nullable();

            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dokspk', function (Blueprint $table) {
            //
        });
    }
}
