<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments("idmenu");
            $table->string("namamenu", 200);
            $table->string("titlemenu", 200);
            $table->string("linkmenu", 200);
            $table->unsignedInteger("parentid");
            $table->string("iconmenu", 250);
            $table->integer("statusmenu");
            $table->timestamps();

            // membuat relasi antar tabel
            $table->foreign('parentid')->references('parentid')->on('parent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
