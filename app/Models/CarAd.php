<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarAd extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year',
        'price',
        'city',
        'phone',
        'description',
        'image',
        'images',
        'engine_type',
        'engine_volume',
        'body_type',
        'mileage',
        'color',
        'market',
        'condition',
    ];

    protected $casts = [
        'images' => 'array' ,
    ];
}
