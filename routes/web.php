<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokeController;


Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/', [App\Http\Controllers\JokeController::class, 'index'])->name('jokes.index');
