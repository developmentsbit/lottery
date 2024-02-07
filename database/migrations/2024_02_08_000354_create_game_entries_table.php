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
        Schema::create('game_entries', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->nullable();
            $table->string('lottery_number')->nullable();
            $table->double('direct_amount',10,2)->nullable();
            $table->double('rumble_amount',10,2)->nullable();
            $table->date('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_entries');
    }
};
