<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_config', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->boolean('maintenance_mode');
            $table->string('payment_methods');
            $table->string('currency');
            $table->string('language');
            $table->float('delivery_fee');
            $table->string('google_adwords_api_key');
            $table->string('product_category');
            $table->string('search_term');
            $table->float('budget');
            $table->integer('campaign_duration');
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->text('meta_description');
            $table->string('stripe_public_key');
            $table->string('stripe_secret_key');
            $table->string('stripe_account_id');
            $table->string('webhook_url');
            $table->string('email_server');
            $table->string('email_sender');
            $table->string('sender_name');
            $table->string('email_authentication');
            $table->integer('min_password_length');
            $table->integer('password_expire_days');
            $table->integer('max_failed_attempts');
            $table->integer('max_brute_force_attempts');
            $table->boolean('two_factor_authentication');
            $table->string('google_client_id');
            $table->string('google_client_secret');
            $table->timestamps();
        });
        DB::table('website_config')->insert([
            [
                'site_name' => 'NordPc',
                'maintenance_mode' => false,
                'payment_methods' => 'paypal',
                'currency' => 'RON',
                'language' => 'Romanian',
                'delivery_fee' => '',
                'google_adwords_api_key' => '',
                'product_category' => '',
                'search_term' => '',
                'budget' => '',
                'campaign_duration' => '',
                'meta_title' => '',
                'meta_keywords' => '',
                'meta_description' => '',
                'stripe_public_key' => '',
                'stripe_secret_key' => '',
                'stripe_account_id' => '',
                'webhook_url' => '',
                'email_server' => '',
                'email_sender' => '',
                'sender_name' => '',
                'email_authentication' => '',
                'min_password_length' => '',
                'password_expire_days' => '',
                'max_failed_attempts' => '',
                'max_brute_force_attempts' => '',
                'two_factor_authentication' => ''
            ]
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
