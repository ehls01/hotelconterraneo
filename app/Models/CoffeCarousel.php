<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeCarousel extends Model
{
    use HasFactory;

    protected $table = 'coffee_carousel';

    protected $fillable = [
        'image'
    ];
}
