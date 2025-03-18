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

    protected $casts = [
        'image' => 'array'
    ];

    public function roomCard()
    {
        return $this->belongsTo(RoomsCard::class, 'rooms_card_id');
    }
}
