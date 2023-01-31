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
        Schema::create("products", function (Blueprint  $table) {
            $table->increments("id");
            $table->string("Title");
            $table->integer("stock");
            $table->string("description");
            $table->string("specifications");
            $table->string("categoryes");
            $table->integer("price");
            $table->integer("Discount");
            $table->text("images");
            $table->string("MainImage");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
