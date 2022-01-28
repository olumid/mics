<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('profile_id');
            $table->boolean('active');
            $table->string('fullname',20);
            $table->string('phone',20)->nullable();
            $table->bigInteger('bitcoin_balance')->default(0.0000000000);
            $table->bigInteger('etherium_balance')->default(0.0000000000);
            $table->bigInteger('litecoin_balance')->default(0.0000000000);
            $table->bigInteger('tron_balance')->default(0.0000000000);
            $table->bigInteger('xrp_balance')->default(0.0000000000);
            $table->bigInteger('usd_balance')->default(0.0000000000);
            $table->bigInteger('loan_balance')->default(0);
            $table->bigInteger('total_deposit')->default(0);
            $table->bigInteger('deposit_count')->default(0);
            $table->bigInteger('total_withdraw')->default(0);
            $table->bigInteger('total_invested')->default(0);
            $table->bigInteger('credit_score')->default(0);
            $table->bigInteger('earnings')->default(0);
            $table->bigInteger('invested_amount')->default(0);
            $table->string('current_investment',50);
            $table->string('investment_status',20);
            $table->bigInteger('withdrawals',);
            $table->string('bitcoin_address',50)->nullable();
            $table->string('etherium_address',50)->nullable();
            $table->string('litecoin_address',50)->nullable();
            $table->string('tron_address',50)->nullable();
            $table->string('xrp_address',50)->nullable();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
