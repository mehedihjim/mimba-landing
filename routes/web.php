<?php

use Illuminate\Support\Facades\Route;

Route::get('/lang/{locale}', [App\Http\Controllers\LanguageController::class, 'switch'])->name('lang.switch');

Route::get('/', function () {
    return view('frontend.pages.home');
});
