<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer_transactions', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('member_id')->nullable();
            $table->string('payment_type')->nullable();
            $table->integer('agent_id')->nullable();
            $table->integer('transaction_type')->nullable()->comment('1 = Cash In, 2 = Transfer, 3 = Expense, 4 = Withdraw, 5 = Win Balance, 6 = Cash To Win , 7 = Win To Cash, 8 = Win Balance Trnasfer');
            $table->bigInteger('country_id')->nullable()->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->bigInteger('agent_accounts')->unsigned()->nullable();
            $table->foreign('agent_accounts')->references('id')->on('agent_accounts');
            $table->double('balance',10,2)->nullable();
            $table->double('transfer',10,2)->nullable();
            $table->double('expense',10,2)->nullable();
            $table->double('withdraw',10,2)->nullable();
            $table->double('winbalance',10,2)->nullable();
            $table->double('winbalance_transfer',10,2)->nullable();
            $table->double('vat',10,2)->nullable();
            $table->string('payment_account')->nullable();
            $table->double('original_amount',10,2)->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('document')->nullable();
            $table->string('transfer_to')->nullable();
            $table->string('transfer_from')->nullable();
            $table->integer('status')->nullable()->comment(' 1 - Approved , 0 - Pending');
            $table->bigInteger('approved_by')->nullable()->unsigned();
            $table->foreign('approved_by')->references('id')->on('users');
            $table->date('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_transactions');
    }
};
