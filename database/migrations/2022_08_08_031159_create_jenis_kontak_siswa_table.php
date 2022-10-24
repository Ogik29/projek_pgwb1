<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_kontak_siswa', function (Blueprint $table) {
            $table->id();
            // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            $table->bigInteger('siswa_id')->unsigned();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade')->onUpdate('cascade');
            // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            $table->bigInteger('jenis_kontak_id')->unsigned();
            $table->foreign('jenis_kontak_id')->references('id')->on('jenisKontak')->onDelete('cascade')->onUpdate('cascade');
            // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            $table->string('deskripsi');
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
        Schema::dropIfExists('jenis_kontak_siswa');
    }
};
