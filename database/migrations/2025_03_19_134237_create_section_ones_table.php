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
        Schema::create('section_ones', function (Blueprint $table) {
            $table->id();
            $table->string('price')->nullable();
            $table->string('price_sale')->nullable();
            $table->string('end_date')->nullable();
            $table->string('product_name')->nullable();
            $table->unsignedBigInteger('rating')->nullable();
            $table->string('rating_count')->nullable();
            $table->string('sold_count')->nullable();
            $table->string('top_product')->nullable();
            $table->json('sliders')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_ones');
    }
};
