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
        //
        Schema::create("coupons", function (Blueprint $table) {
            $table->increments("id");
            $table->string("code");
            $table->float("percentage");
            $table->integer("starts_at");
            $table->integer("ends_at");
            $table->integer("type");
            $table->integer("status");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
};
