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
        Schema::create('produk_jadis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->string('size');
            $table->integer('stock');
            $table->string('kategori');
            $table->integer('min_ammount')->nullable();
            $table->integer('stock_akhir')->nullable();
            $table->decimal('hpp', 15, 2)->nullable();
            $table->decimal('harga_ecer', 15, 2);
            $table->decimal('harga_rs', 15, 2);
            $table->decimal('harga_mkl', 15, 2);
            $table->decimal('harga_ds', 15, 2);
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
        Schema::dropIfExists('produk_jadis');
    }
};
