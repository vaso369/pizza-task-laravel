<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pizza', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('pizza_id');
            $table->index(['order_id', 'pizza_id']);
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('pizza_id')->references('id')->on('pizzas');
            $table->integer('quantity');
            $table->integer('size_id');
            $table->decimal('total_price',5,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_lines');
    }
}
