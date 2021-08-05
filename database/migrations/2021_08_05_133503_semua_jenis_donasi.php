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
        Schema::create('', function (Blueprint $table){
            $table->id();
            $table->string('jenis_dana');
            $table->string('tambahan_donasi');
            $table->foreignId('donasi_id')->constrained('donasi');
        });
        Schema::create('', function (Blueprint $table){
            $table->id();
            $table->string('jenis_dana');
            $table->string('tambahan_donasi');
            $table->foreignId('donasi_id')->constrained('donasi');
        });
        Schema::create('', function (Blueprint $table){
            $table->id();
            $table->string('jenis_dana');
            $table->string('tambahan_donasi');
            $table->foreignId('donasi_id')->constrained('donasi');
        });
        Schema::create('', function (Blueprint $table){
            $table->id();
            $table->string('jenis_dana');
            $table->string('tambahan_donasi');
            $table->foreignId('donasi_id')->constrained('donasi');
        });
        Schema::create('dana', function (Blueprint $table){
            $table->id();
            $table->string('jenis_dana');
            $table->string('tambahan_donasi');
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
    }
}
