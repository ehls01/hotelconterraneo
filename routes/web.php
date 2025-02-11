<?php

use App\Models\HomeCard;
use App\Models\HomeBanner;
use App\Models\AboutBanner;
use App\Models\AboutMember;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LazerController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\QuartosController;


// Route::get('/', [HomeController::class,"index"]);

Route::get('/', function () {
    $home_banners = HomeBanner::first()->get();
    $home_cards = HomeCard::limit(8)->get();
    return view('index',compact('home_banners','home_cards'));
});

// Route::get('sobre', function () {
//     return view('sobre');
// });

Route::get('sobre', function () {
    $about_banners = AboutBanner::first();
    $about_members = AboutMember::limit(6)->get();
    return view('sobre',compact('about_banners','about_members'));
    
});

Route::get('quartos', function () {
    return view('quartos');
});

Route::get('cafe', function () {
    return view('cafe');
});

Route::get('lazer', function () {
    return view('lazer');
});

