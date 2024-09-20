<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::post('/language-switch', LanguageController::class)->name('language.switch');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');