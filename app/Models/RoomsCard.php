<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCard extends Model
{
    use HasFactory;

    protected $table = 'rooms_card';

    protected $fillable = [
        'title', 'text', 'price', 'type'
    ];

    public function roomImages()
    {
        return $this->hasMany(RoomImage::class, 'rooms_card_id');
    }
}
