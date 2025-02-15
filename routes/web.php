<?php

use App\Models\HomeCard;
use App\Models\RoomsCard;
use App\Models\CoffeeCard;
use App\Models\HomeBanner;
use App\Models\RoomsImage;
use App\Models\AboutBanner;
use App\Models\AboutMember;

use App\Models\RoomsBanner;
use App\Models\CoffeeCarousel;
use App\Models\LeisureCarousel;
use App\Models\CoffeeDescription;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LazerController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\QuartosController;

Route::get('/', function () {
    $home_banners = HomeBanner::first()->get();
    $home_cards = HomeCard::all();
    return view('index',compact('home_banners','home_cards'));
});

Route::get('sobre', function () {
    $about_banners = AboutBanner::first();
    $about_members = AboutMember::all();
    return view('sobre',compact('about_banners','about_members'));
    
});

Route::get('quartos', function () {
    $rooms_banners = RoomsBanner::first();
    $rooms_cards = RoomsCard::with('roomImages')->get();
    // dd($rooms_cards[0]->roomImages);
    // $rooms_images = RoomsImage::limit(3)->get();
    return view('quartos',compact('rooms_banners', 'rooms_cards'));
});

Route::get('cafe', function () {
    $coffee_carousels = CoffeeCarousel::limit(3)->get();
    $coffee_cards = CoffeeCard::all();
    $coffee_descriptions = CoffeeDescription::all();
    return view('cafe',compact('coffee_carousels', 'coffee_cards', 'coffee_descriptions'));
});

Route::get('lazer', function () {
    $leisure_carousels = LeisureCarousel::all();
    $home_cards = HomeCard::all();
    return view('lazer',compact('leisure_carousels', 'home_cards'));
});