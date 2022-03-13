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
        Schema::create('drink_ingridients', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('drink_id');
            $table->integer('ingridient_id');
            $table->foreign('drink_id')->references('id')->on('drinks');
            $table->foreign('ingridient_id')->references('id')->on('ingridients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drink_ingridients');
    }
};
