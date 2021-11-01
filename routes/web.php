<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function() {
    return view('home');
})->name('homepg');

Route::get('about', function() {
    return view('about');
})->name('aboutpg');

Route::get('contact', function() {
    return view('contact');
})->name('contactpg');
