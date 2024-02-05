<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->string('kd_supplier')->primary(); // Menjadikan kd_supplier sebagai primary key
            $table->string('license');
            $table->string('nama_supplier');
            $table->text('alamat_supplier');
            $table->string('telp_supplier');
            $table->string('img_supplier')->nullable();
            $table->string('reg_supplier');
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
        Schema::dropIfExists('supplier');
    }
}
