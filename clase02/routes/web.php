<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/','home')->name('home');
Route::view('about','about')->name('about');
Route::view('services','services')->name('services');
Route::view('contact','contact')->name('contact');