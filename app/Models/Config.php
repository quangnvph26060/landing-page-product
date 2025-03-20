<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'address',
        'hotline',
        'email',
        'website',
        'icon',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

    protected $casts = [
        'seo_keywords' => 'array',
    ];
}
