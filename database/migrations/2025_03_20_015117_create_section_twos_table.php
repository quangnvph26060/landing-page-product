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
        Schema::create('section_twos', function (Blueprint $table) {
            $table->id();
            $table->json('supports')->nullable();
            $table->json('payment_methods')->nullable();
            $table->string('transport')->nullable();
            $table->string('freeship_discount')->nullable();
            $table->string('return_policy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_twos');
    }
};
