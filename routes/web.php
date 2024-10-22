<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

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
