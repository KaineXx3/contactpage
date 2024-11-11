<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request; // Use the correct Request class


Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutJimmy', function () {
    return view('aboutJimmy');
});

Route::get('/aboutJimmy', function () {
    return view('aboutPeiYee');
});

Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submitForm']); 

