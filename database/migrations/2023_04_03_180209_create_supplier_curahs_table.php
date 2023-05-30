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
        Schema::create('supplier_curahs', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_name');
            $table->string('phone');
            $table->string('email');
            $table->decimal('entry_price', 15,2);
            $table->float('ukuran_kulak');
            $table->string('supplier_type');
            $table->string('address');
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
        Schema::dropIfExists('supplier_curahs');
    }
};
