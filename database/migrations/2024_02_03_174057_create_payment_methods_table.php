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
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('method_name')->nullable();
            $table->string('method_name_bn')->nullable();
            $table->string('number')->nullable();
            $table->double('vat',10,2)->nullable();
            $table->integer('status')->nullable();
            $table->double('dollar_rate')->nullable();
            $table->bigInteger('create_by')->unsigned()->nullable();
            $table->foreign('create_by')->references('id')->on('users');
            $table->date('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};
