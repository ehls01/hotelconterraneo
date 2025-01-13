<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeisureCarousel extends Model
{
    use HasFactory;

    protected $table = 'leisure_carousels';

    protected $fillable = [
        'image', 'title', 'text'
    ];
}
