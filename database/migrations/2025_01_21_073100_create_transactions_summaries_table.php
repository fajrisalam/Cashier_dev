<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_summaries', function (Blueprint $table) {
            $table->id();
            $table->integer('id_transaction');
            $table->integer('id_user');
            $table->integer('selling_price');
            $table->integer('paid');
            $table->integer('return');
            $table->integer('status');
            $table->string('buyer');
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
        Schema::dropIfExists('transaction_summaries');
    }
}
