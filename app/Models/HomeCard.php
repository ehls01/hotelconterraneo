<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCard extends Model
{
    use HasFactory;

    protected $table = 'home_card';

    protected $fillable = [
        'image', 'title'
    ];
}
