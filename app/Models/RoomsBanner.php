<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomsBanner extends Model
{
    use HasFactory;

    protected $table = 'rooms_banners';

    protected $fillable = [
        'image', 'title', 'text'
    ];
}
