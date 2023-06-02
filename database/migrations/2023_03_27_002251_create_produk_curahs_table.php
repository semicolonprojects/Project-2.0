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
        Schema::create('produk_curahs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kode_barang')->unique();
            $table->string('nama_barang');
            $table->string('size');
            $table->integer('stock');
            $table->string('kategori');
            $table->integer('min_ammount')->nullable();
            $table->integer('stock_akhir')->nullable();
            $table->decimal('hpp', 15, 2)->nullable();
            $table->decimal('harga', 15, 2);
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
        Schema::dropIfExists('produk_curahs');
    }
};
