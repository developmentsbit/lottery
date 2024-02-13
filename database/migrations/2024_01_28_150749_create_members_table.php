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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('member_id')->nullable();
            $table->string('referral_no')->references('member_id')->on('members')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('password')->nullable();
            $table->string('raw_text_pass')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('email')->nullable();
            $table->string('nationality')->nullable();
            $table->string('profile')->nullable();
            $table->date('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
