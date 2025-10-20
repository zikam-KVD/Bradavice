<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/video-kamen-mudrcu', 'video')->name("videoHarryhoPottera");
