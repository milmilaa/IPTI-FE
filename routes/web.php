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

// Events (daftar semua event)
Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/events/detail1', function () {
    return view('event_detail1');
})->name('event.detail1');

Route::get('/events/detail2', function () {
    return view('event_detail2');
})->name('event.detail2');

// About Us
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
