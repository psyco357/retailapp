// di dalam file migrasi create_unit_barang_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitBarang extends Migration
{
    public function up()
    {
        Schema::create('unit_barang', function (Blueprint $table) {
            $table->string('kd_induk')->nullable();
            $table->string('kd_unit_barang')->unique();
            $table->string('nama_unitbarang');
            $table->text('deskripsi')->nullable();
            $table->string('status_unit');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('unit_barang');
    }
}
