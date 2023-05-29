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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('kode_barang')->references('id')->on('produk_jadis')->onDelete('cascade');
            $table->string('status_pembayaran');
            $table->string('tipe_pembayaran');
            $table->decimal('total_termin', 15, 2)->nullable();
            $table->date('tenggat_order');
            $table->foreignId('tipe_pesanan')->constrained('channels')->onDelete('cascade');
            $table->decimal('total_pembelian', 15, 2);
            $table->integer('total_order');
            $table->float('diskon')->nullable();
            $table->decimal('ongkir', 15, 2);
            $table->string('status_barang');
            $table->string('note');
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
        Schema::dropIfExists('orders');
    }
};
