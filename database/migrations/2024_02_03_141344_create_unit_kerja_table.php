<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitKerjaTable extends Migration
{
    public function up()
    {
        Schema::create('unit_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('kd_induk');
            $table->string('kd_unit_kerja')->unique();
            $table->string('nama_unit_kerja');
            $table->text('deskripsi_unit_kerja')->nullable();
            $table->string('status_unit_kerja');
        });
    }

    public function down()
    {
        Schema::dropIfExists('unit_kerja');
    }
}
