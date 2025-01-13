<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomsImage extends Model
{
    use HasFactory;

    protected $table = 'rooms_images';

    protected $fillable = [
        'image', 'rooms_card_id'
    ];

    public function roomCard()
    {
        return $this->belongsTo(RoomCard::class, 'rooms_card_id');
    }
}
