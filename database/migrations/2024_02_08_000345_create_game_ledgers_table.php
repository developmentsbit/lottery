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
        Schema::create('game_ledgers', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->nullable();
            $table->string('member_id')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->bigInteger('game_id')->unsigned()->nullable();
            $table->foreign('game_id')->references('id')->on('game_setups');
            $table->string('game_name')->nullable();
            $table->string('slot')->nullable();
            $table->double('total_amount',10,2)->nullable();
            $table->double('discount',10,2)->nullable();
            $table->double('bet_amount',10,2)->nullable();
            $table->date('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_ledgers');
    }
};
