<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMember extends Model
{
    use HasFactory;

    protected $table = 'about_members';

    protected $fillable = [
        'image', 'name', 'position', 'text', 'instagram'
    ];
}
