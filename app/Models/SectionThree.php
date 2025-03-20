<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionThree extends Model
{
    use HasFactory;

    protected $fillable = [
        'review_count',
        'comments',
        'shop_name',
        'shop_rating',
        'product_category',
        'sold_count',
        'response_rate_24h',
        'ship_within_48h'
    ];

    protected $casts = [
        'comments' => 'array',
    ];
}
