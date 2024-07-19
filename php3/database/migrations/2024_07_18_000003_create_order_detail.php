<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->increments('order_detail_id');
            $table->unsignedInteger('orderId');
            $table->timestamps();
            $table->float('price',10,2);
            $table->integer('quantity');

            $table->unsignedInteger('productId');
            $table->foreign('orderId')->references('order_id')->on('order')->onDelete('cascade');
            $table->foreign('productId')->references('product_id')->on('product')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};
