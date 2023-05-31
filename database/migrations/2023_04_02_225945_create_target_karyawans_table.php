<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void`
     */
    public function up()
    {
        Schema::create('target_karyawans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->BigInteger('total_tercapai')->unsigned()->nullable();
            $table->decimal('target', 15, 2);
            $table->date('deadline_target');
            $table->timestamps();
            $table->foreign('total_tercapai')->references('komisi')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('target_karyawans');
    }
};
