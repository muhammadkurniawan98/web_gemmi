<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SemuaJenisDonasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gnj', function (Blueprint $table){
            $table->id();
            $table->string('jenis_gnj');
            $table->string('tambahan_donasi')->nullable();
            $table->foreignId('donasi_id')->constrained('donasi');
        });
        Schema::create('snack', function (Blueprint $table){
            $table->id();
            $table->string('jenis_snack');
            $table->string('tambahan_donasi')->nullable();
            $table->foreignId('donasi_id')->constrained('donasi');
        });
        Schema::create('sembako', function (Blueprint $table){
            $table->id();
            $table->string('jenis_sembako');
            $table->string('tambahan_donasi')->nullable();
            $table->foreignId('donasi_id')->constrained('donasi');
        });
        Schema::create('buku', function (Blueprint $table){
            $table->id();
            $table->string('jenis_buku');
            $table->string('keterangan')->nullable();
            $table->foreignId('donasi_id')->constrained('donasi');
        });
        Schema::create('dana', function (Blueprint $table){
            $table->id();
            $table->string('jumlah_dana');
            $table->string('bank_rekening')->nullable();
            $table->foreignId('donasi_id')->constrained('donasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('gnj');
        Schema::dropIfExists('snack');
        Schema::dropIfExists('sembako');
        Schema::dropIfExists('buku');
        Schema::dropIfExists('dana');
    }
}
