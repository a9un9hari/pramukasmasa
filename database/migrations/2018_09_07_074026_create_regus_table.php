<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('status')->nullable();
            $table->string('konfirmasi_pembayaran')->nullable();
            $table->string('no_dada')->nullable();
            $table->integer('giat_a')->nullable();
            $table->integer('giat_b')->nullable();
            $table->integer('giat_c')->nullable();
            $table->integer('giat_d')->nullable();
            $table->integer('giat_e')->nullable();
            $table->integer('giat_f')->nullable();
            $table->integer('giat_g')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regus');
    }
}
