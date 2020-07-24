<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('address');
            $table->string('phone');
            $table->string('additional_info',255)->nullable();
            $table->decimal('price_eur',5,2);
            $table->decimal('price_usd',5,2);
            $table->enum('payment', ['Cash', 'Card']);
            $table->enum('status', ['Received', 'Shipped','Delivered','Canceled']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes('deleted_at',0);
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
        Schema::dropIfExists('orders');
    }
}
