<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionFour extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'short_description',
        'description',
        'price',
        'discount',
        'end_date',
        'options'
    ];

    protected $casts = [
        'options' => 'array',
        'end_date' => 'date'
    ];
}
