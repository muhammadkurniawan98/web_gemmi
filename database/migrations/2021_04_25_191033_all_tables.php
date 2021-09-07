<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_tamu', function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->date('tanggal');
        });
        Schema::create('donatur', function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('status');
            $table->string('ttl');
            $table->string('pekerjaan');
            $table->date('tanggal');
        });
        Schema::create('donasi', function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('nama_penerima');
            $table->string('jenis_donasi');
            $table->string('jumlah_donasi');
            $table->string('bukti_donasi');
            $table->date('tanggal');
            $table->string('status')->nullable()->default('belum diterima');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku_tamu');
        Schema::dropIfExists('donatur');
        Schema::dropIfExists('donasi');
    }
}
