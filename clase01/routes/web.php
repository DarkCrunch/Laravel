<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/', 'welcome')->name('welcome');
Route::view('about','landing.about')->name('about');