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
        Schema::create('admin', function (Blueprint $table) {
            $table->string("email");
            $table->string("group");
        });

        Schema::create('admin_group', function (Blueprint $table) {
            $table->string('group');
            $table->longText('permission');
        });

        DB::table('admin_group')->insert([
            ['group' => 'Administrator', 'permission' => ''],
            ['group' => 'guest', 'permission' => '']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
