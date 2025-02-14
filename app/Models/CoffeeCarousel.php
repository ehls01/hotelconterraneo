<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeCarousel extends Model
{
    use HasFactory;

    protected $table = 'coffee_carousels';

    protected $casts = ['image'=>'array'];

    protected $fillable = [
        'image'
    ];
}
