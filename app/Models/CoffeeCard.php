<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeCard extends Model
{
    use HasFactory;

    protected $table = 'coffee_card';

    protected $fillable = [
        'title', 'text', 'image'
    ];
}
