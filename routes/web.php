<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

// Language switching
Route::get('switch/{language}', [LanguageController::class, 'setLanguage'])->name('language.set');