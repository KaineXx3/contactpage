<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request; // Use the correct Request class
use App\Http\Controllers\HomeController;


Route::get('/aboutJimmy', function () {
    return view('aboutJimmy');
});

Route::get('/aboutPeiYee', function () {
    return view('aboutPeiYee');
});

Route::get('/aboutMF', function () {
    return view('aboutMF');

});
Route::get('/aboutGan', function () {
    return view('aboutGan');
})->name('aboutGan');


Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submitForm']); 
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


