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
        Schema::create('section_threes', function (Blueprint $table) {
            $table->id();
            $table->string('review_count')->nullable();
            $table->json('comments')->nullable();
            $table->string('shop_name')->nullable();
            $table->string('shop_rating')->nullable();
            $table->string('product_category')->nullable();
            $table->string('sold_count')->nullable();
            $table->string('response_rate_24h')->nullable();
            $table->string('ship_within_48h')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_threes');
    }
};
