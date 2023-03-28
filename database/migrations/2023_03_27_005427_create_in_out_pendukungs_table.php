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
        Schema::create('in_out_pendukungs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_barang')->constrained('barang_pendukungs')->onDelete('cascade');
            $table->integer('barang_masuk')->nullable();
            $table->integer('barang_keluar')->nullable();
            $table->date('date_in')->nullable();
            $table->date('date_out')->nullable();
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
        Schema::dropIfExists('in_out_pendukungs');
    }
};
