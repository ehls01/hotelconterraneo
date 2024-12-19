<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutBanner extends Model
{
    use HasFactory;

    protected $table = 'about_banner';

    protected $fillable = [
        'image', 'title', 'text'
    ];
}
