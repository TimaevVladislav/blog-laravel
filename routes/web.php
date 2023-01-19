<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('components.layout');
});

Route::get('/blog', function () {
    return view("archive");
})->name("blog");

Route::get('/gallery', function () {
    return view("gallery");
})->name("gallery");

Route::get('/contact', function () {
    return view("contact");
})->name("contact");

Route::get('/single', function () {
    return view("single");
})->name("single");
