<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeDescription extends Model
{
    use HasFactory;

    protected $table = 'coffee_descriptions';

    protected $fillable = [
        'title', 'text'
    ];
}
