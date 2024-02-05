<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderBeliBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderbelibarang', function (Blueprint $table) {
            $table->string('license');
            $table->string('kd_transaksi')->primary(); // Mengatur kd_transaksi sebagai primary key
            $table->string('barcode');
            $table->string('kd_supplier');
            $table->string('grosirtaecer');
            $table->string('jenis_pembelian');
            $table->integer('jumlah_beli');
            $table->date('tanggal_beli');
            $table->timestamps();

            // Menambahkan foreign key ke tabel suppliers berdasarkan kd_supplier
            $table->foreign('kd_supplier')->references('kd_supplier')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderbelibarang');
    }
}
