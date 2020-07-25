<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_pizza', function (Blueprint $table) {
            $table->unsignedBigInteger('pizza_id');
            $table->unsignedBigInteger('ingredient_id');
            $table->index(['pizza_id', 'ingredient_id']);
            $table->foreign('pizza_id')->references('id')->on('pizzas');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas_ingredients');
    }
}
