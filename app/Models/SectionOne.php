<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionOne extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'price_sale',
        'end_date',
        'product_name',
        'rating',
        'rating_count',
        'sold_count',
        'top_product',
        'sliders'
    ];

    protected $casts = [
        'sliders' => 'array'
    ];
}
