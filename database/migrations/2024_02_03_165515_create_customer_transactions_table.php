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
            $table->string('member_id')->nullable();
            $table->string('payment_type')->nullable();
            $table->integer('transaction_type')->nullable()->comment('1 = Cash In, 2 = Transfer, 3 = Expense, 4 = Withdraw, 5 = Win Balance,');
            $table->double('balance',10,2)->nullable();
            $table->double('transfer',10,2)->nullable();
            $table->double('expense',10,2)->nullable();
            $table->double('withdraw',10,2)->nullable();
            $table->double('winbalance',10,2)->nullable();
            $table->double('vat',10,2)->nullable();
            $table->string('payment_account')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('document')->nullable();
            $table->string('transfer_to')->nullable();
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
