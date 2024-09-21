<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::post('/switch-language', [LanguageController::class, 'switchLanguage'])->name('language.switch');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/projects', function () {
    return view('projects');
});

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');