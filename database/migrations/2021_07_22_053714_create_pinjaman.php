<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjaman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nim');
            $table->string('Nama');
            $table->string('prodi');
            $table->string('alamat_ktp');
            $table->string('alamat_saatini');
            $table->string('no_hp');
            $table->string('pekerjaan_ortu');
            $table->string('jumlah_pinjaman');
            $table->string('ktm');
            $table->string('khs');
            $table->string('daftar_nilai');
            $table->string('slip_gaji');
            $table->string('kk');
            $table->string('invoice');
            $table->string('bayar_listrik');
            $table->string('status_pinjaman')->nullable();
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
        Schema::dropIfExists('pinjaman');
    }
}