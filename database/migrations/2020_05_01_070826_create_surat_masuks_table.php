<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            //sekretaris
            $table->increments('id');
            $table->string('kodej01');
            $table->string('kode_proyek');
            $table->text('deskripsi')->nullable();
            $table->date('tanggal_diterima')->nullable();

            //kadep
            $table->string('status_surat')->nullable();
            $table->string('nama_pj')->nullable();

            //kabiro
            $table->string('jenis_pengadaan')->nullable();
            $table->date('tanggal_mulai_spph')->nullable();
            $table->date('tanggal_selesaispph')->nullable();
            $table->date('tanggal_mulai_dokpenawaran')->nullable();
            $table->date('tanggal_selesai_dokpenawaran')->nullable();
            $table->date('tanggal_mulai_baet')->nullable();
            $table->date('tanggal_selesai_baet')->nullable();
            $table->date('tanggal_mulai_banh')->nullable();
            $table->date('tanggal_selesai_banh')->nullable();
            $table->date('tanggal_mulai_pemenang')->nullable();
            $table->date('tanggal_selesai_pemenang')->nullable();
            $table->date('tanggal_mulai_persetujuankontrak')->nullable();
            $table->date('tanggal_selesai_persetujuankontrak')->nullable();
            $table->string('juru_beli')->nullable();
            $table->string('status_surat_kabiro')->nullable();


            //juru beli-spph-baet-banh dan subkon-dok sph
            $table->string('perihal_surat')->nullable();
            $table->string('kepada')->nullable();
            $table->string('keterangan_surat')->nullable();
            $table->string('kode_banh')->nullable();
            //konfirmasi sph masuk
            $table->string('alasan_reject')->nullable();
            //juru beli-dokumen surat kontrak
            $table->string('nama_subkon')->nullable();
            $table->string('user_admin')->nullable()->change();
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
        Schema::dropIfExists('suratmasuk');
    }    
}
