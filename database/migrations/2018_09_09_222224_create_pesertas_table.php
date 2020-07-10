<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('regu_id')->unsigned();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('alamat');
            $table->string('kota');
            $table->string('kodepos')->nullable();
            $table->string('email')->nullable();
            $table->string('telp')->nullable();
            $table->string('agama');
            $table->string('gol_darah');
            $table->string('sd_nama');
            $table->string('sd_tempat_tahun');
            $table->string('smp_nama')->nullable();
            $table->string('smp_tempat_tahun')->nullable();
            $table->string('sma_nama')->nullable();
            $table->string('sma_tempat_tahun')->nullable();
            $table->string('perti_nama')->nullable();
            $table->string('perti_tempat_tahun')->nullable();
            $table->string('siaga_tingkat')->nullable();
            $table->string('siaga_tempat_tahun')->nullable();
            $table->string('penggalang_tingkat')->nullable();
            $table->string('penggalang_tempat_tahun')->nullable();
            $table->string('penegak_tingkat')->nullable();
            $table->string('penegak_tempat_tahun')->nullable();
            $table->string('pandega_tingkat')->nullable();
            $table->string('pandega_tempat_tahun')->nullable();
            $table->string('kegiatan_1_nama')->nullable();
            $table->string('kegiatan_1_tempat_tahun')->nullable();
            $table->string('kegiatan_2_nama')->nullable();
            $table->string('kegiatan_2_tempat_tahun')->nullable();
            $table->string('kegiatan_3_nama')->nullable();
            $table->string('kegiatan_3_tempat_tahun')->nullable();
            $table->string('kegiatan_4_nama')->nullable();
            $table->string('kegiatan_4_tempat_tahun')->nullable();
            $table->string('kegiatan_5_nama')->nullable();
            $table->string('kegiatan_5_tempat_tahun')->nullable();
            $table->string('foto');
            $table->string('penyakit')->nullable();
            $table->string('gangguan_jiwa')->nullable();
            $table->string('patah_tlang')->nullable();
            $table->string('sedang_perawatan')->nullable();
            $table->string('ketergantungan_obat')->nullable();
            $table->string('surat_sehat');
            $table->string('kartu_pelajar');
            $table->string('jabatan');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->timestamps();

            $table->foreign('regu_id')->references('id')->on('regus')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
}
