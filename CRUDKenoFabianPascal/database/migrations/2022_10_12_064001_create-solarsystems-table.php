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
        Schema::create('solarsystems', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('size');
            $table->string('unitCode', 2);
            $table->timestamps();

            $table->foreign('unitCode')->references('unitCode')->on('unitcodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solarsystems');
    }
};
