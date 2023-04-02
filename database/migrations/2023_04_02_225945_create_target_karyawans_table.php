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
        Schema::create('target_karyawans', function (Blueprint $table) {
            $table->id();
            $table->decimal('target', 15, 2);
            $table->decimal('total_tercapai', 15, 2);
            $table->date('deadline_target');
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
        Schema::dropIfExists('target_karyawans');
    }
};
