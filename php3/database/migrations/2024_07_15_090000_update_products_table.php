<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->string('name', 250)->change();
            $table->renameColumn('price', 'product_price');
        });
    }

    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->string('name', 200)->change();
            $table->renameColumn('product_price', 'price');
        });
    }

};
