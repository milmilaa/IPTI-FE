<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return "Halaman Login (nanti diganti dengan Auth)";
})->name('login');


Route::get('/study-program', function () {
    return view('study-program');
})->name('study.program');


Route::get('/facility', function () {
    return view('facility');
})->name('facility');


Route::get('/admission', function () {
    return view('admission');
})->name('admission');

// Events
Route::get('/events', function () {
    return view('events');
})->name('events');

// About Us
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


