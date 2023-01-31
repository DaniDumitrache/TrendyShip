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
        Schema::create("Delivery", function (Blueprint $table) {
            $table->longText("OrderId");
            $table->string("OrderBy");
            $table->longText("products");
            $table->string("FullName");
            $table->string("PhoneNumber");
            $table->string("County");
            $table->string("local");
            $table->string("adress");
            $table->integer("Delivery"); // This Price Is in RON
            $table->integer("SubTotal"); // This Price Is in RON
            $table->integer("Total"); // This Price Is in RON
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
        Schema::dropIfExists('Delivery');
    }
};
