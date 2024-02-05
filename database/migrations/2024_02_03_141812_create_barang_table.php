// di dalam file migrasi create_barang_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->string('kd_unit_barang');
            $table->string('barcode')->nullable();
            $table->string('nama_barang');
            $table->text('deskripsi_barang')->nullable();
            $table->string('satuan_ecer');
            $table->string('satuan_grosir');
            $table->date('expired_barang')->nullable();
            $table->decimal('harga_jual', 10, 2);
            $table->decimal('harga_beli', 10, 2);
            $table->integer('stok')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
