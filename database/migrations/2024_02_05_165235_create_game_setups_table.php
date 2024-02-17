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
        Schema::create('game_setups', function (Blueprint $table) {
            $table->id();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('game_title')->nullable();
            $table->string('game_title_bn')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->text('expire_message')->nullable();
            $table->integer('status')->nullable()->comment(' 1 - Active , 0 - Inactive');
            $table->date('deleted_at')->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('game_setups');
    }
};
