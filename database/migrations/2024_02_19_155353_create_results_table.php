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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->date('draw_date')->nullable();
            $table->string('first_prize')->nullable();
            $table->string('three_up')->nullable();
            $table->string('two_up')->nullable();
            $table->string('two_down')->nullable();
            $table->date('next_draw_date')->nullable();
            $table->integer('status')->nullable();
            $table->date('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
