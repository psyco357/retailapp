<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumentJenisTransTable extends Migration
{
    public function up()
    {
        Schema::create('instrumentjenistrans', function (Blueprint $table) {
            $table->unsignedBigInteger('kd_transaksi')->unique();
            $table->string('jenis_transaksi');
        });
    }

    public function down()
    {
        Schema::dropIfExists('instrumentjenistrans');
    }
}
