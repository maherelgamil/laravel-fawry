<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('fawry.user_table'), function (Blueprint $table) {
            $table->string('payment_card_last_four')->unique();
            $table->string('payment_card_brand');
            $table->text('payment_card_fawry_token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create(config('fawry.user_table'), function (Blueprint $table) {
            $table->dropColumn('payment_card_last_four')->unique();
            $table->dropColumn('payment_card_brand');
            $table->dropColumn('payment_card_fawry_token')->nullable();
        });
    }
}
