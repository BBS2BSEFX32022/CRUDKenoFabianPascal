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
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->double('size');
            $table->string('unitCode', 2);
            $table->string('solarSystem');
            $table->timestamps();

            $table->foreign('solarSystem')->references('name')->on('solarsystems');
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
        Schema::dropIfExists('planets');
    }
};