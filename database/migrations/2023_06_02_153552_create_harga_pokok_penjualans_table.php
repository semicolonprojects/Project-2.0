<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga_pokok_penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('size');
            $table->decimal('bahan_madu', 15,2);
            $table->decimal('bahan_pendukung', 15,2);
            $table->decimal('total_hpp', 15 ,2)->nullable();
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
        Schema::dropIfExists('harga_pokok_penjualans');
    }
};
