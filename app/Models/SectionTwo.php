<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionTwo extends Model
{
    use HasFactory;

    protected $fillable = [
        'supports',
        'payment_methods',
        'transport',
        'freeship_discount',
        'return_policy'
    ];

    protected $casts = [
        'supports' => 'array',
        'payment_methods' => 'array',
    ];
}
