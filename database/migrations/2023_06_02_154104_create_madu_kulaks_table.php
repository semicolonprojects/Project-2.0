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
        Schema::create('madu_kulaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_madu');
            $table->string('size');
            $table->decimal('harga_per_gram');
            $table->decimal('harga_total')->nullable();
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
        Schema::dropIfExists('madu_kulaks');
    }
};
