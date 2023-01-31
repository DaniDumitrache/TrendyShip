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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string("Phone")->nullable();
            $table->string("County")->nullable();
            $table->string("Local")->nullable();
            $table->longText("adress")->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->longText("token")->nullable();
            $table->dateTime("remember_token_expire")->nullable();
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
        Schema::dropIfExists('users');
    }
};
