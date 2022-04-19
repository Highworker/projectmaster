<?php

use App\Models\Drink;
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
            //TODO 3: drop id (use составной ключ), drop timestamps
            $table->id('id')->autoIncrement();
            $table->timestamps();
            //TODO 2: OnDelete, OnCascade
            $table->foreignIdFor(Drink::class);
            $table->foreignId('ingridient_id');
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
