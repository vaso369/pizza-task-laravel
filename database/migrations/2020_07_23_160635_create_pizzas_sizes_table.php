<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('size_pizza', function (Blueprint $table) {
            $table->id();
            $table->decimal('price',5,2);
            $table->unsignedBigInteger('pizza_id');
            $table->unsignedBigInteger('size_id');
            $table->index(['pizza_id', 'size_id']);
            $table->foreign('pizza_id')->references('id')->on('pizzas');
            $table->foreign('size_id')->references('id')->on('sizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas_sizes');
    }
}
