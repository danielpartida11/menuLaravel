<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatesIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plates_ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('plates_id');
            $table->string('ingredients_id');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('plates_id')->references('id')->on('plates')->onDelete('cascade');
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plates_ingredients');
    }
}
