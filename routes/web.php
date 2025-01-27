<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\QuartosController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\LazerController;

Route::get('/', [HomeController::class,"index"]);

Route::get('sobre', function () {
    return view('sobre');
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

