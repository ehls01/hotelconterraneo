<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomBanner extends Model
{
    use HasFactory;

    protected $table = 'rooms_banner';

    protected $fillable = [
        'image', 'title', 'text'
    ];
}
