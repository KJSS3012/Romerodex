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
        Schema::create('romeromons', function (Blueprint $table) {
            $table->id('rom_id');
            $table->string('rom_name');
            $table->string('rom_description');
            $table->unsignedBigInteger('rom_bal_id');
            $table->unsignedBigInteger('rom_use_id');
            $table->foreign('rom_bal_id')->references('bal_id')->on('romeroballs');
            $table->foreign('rom_use_id')->references('use_id')->on('users');
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
        Schema::dropIfExists('romeromons');
    }
};
