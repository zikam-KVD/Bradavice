<?php

use App\Http\Controllers\CollegeController;
use App\Models\College;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $koleje = College::all();

    $max = College::max('body');

    if(0 != $max) {
        $pixelNaBod = 300 / $max;
    } else {
        $pixelNaBod = 0;
    }

    return view('welcome',
        [
            'colleges' => $koleje,
            'kouzelnaPro' => $pixelNaBod
        ]
    );
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

    Route::get('/koleje', [CollegeController::class, 'showColleges'])->name('admin.koleje');
    Route::post(
        '/kolej/uprav/{id}',
        [CollegeController::class, 'upravKolej'])->name('admin.edit'
    );

    Route::view('/colleges-livewire', 'colleges_livewire')->name('admin.kolej-livewire');
});
