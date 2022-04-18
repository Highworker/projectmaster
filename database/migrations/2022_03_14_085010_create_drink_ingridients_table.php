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
            $table->id('id')->autoIncrement();
            $table->timestamps();
            $table->foreignId('drink_id')
                ->references('id')->on('drinks')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('ingridient_id')
                ->references('id')->on('ingridients')
                ->onDelete('cascade')
                ->onUpdate('cascade');;
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
