<?php

use App\Models\College;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $koleje = College::all();

    //dd($koleje);

    return view('welcome', ['colleges' => $koleje]);
});

Route::view('/video-kamen-mudrcu', 'video')->name("videoHarryhoPottera");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
