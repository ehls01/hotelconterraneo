<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomsCard extends Model
{
    use HasFactory;

    protected $table = 'rooms_cards';

    protected $fillable = [
        'title', 'text', 'price', 'type'
    ];

    public function roomImages()
    {
        return $this->hasMany(RoomImage::class, 'rooms_card_id');
    }
}
