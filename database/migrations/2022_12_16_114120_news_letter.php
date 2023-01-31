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
        Schema::create('NewsLetter', function (Blueprint $table) {
            $table->string("id");
            $table->string("email");
            $table->longText("config");
            $table->timestamps();
        });

        /*
        This will create a table called newsletters with the columns id, email, status and
        created_at and updated_at . The status column will be used to check if a
        email is subscribed or not
        */

        // Schema::create('newsletters', function (Blueprint $table) {
        // $table->id();
        // $table->string('email');
        // $table->boolean('status')->default(1);
        // $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NewsLetter');
    }
};
