<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JokeController;


Auth::routes();

Route::get('/', [JokeController::class, 'index'])->name('jokes.index');
Route::post('/jokes', [JokeController::class, 'store'])->name('jokes.store');
Route::put('/jokes/{id}', [JokeController::class, 'update'])->name('jokes.update');
Route::delete('/jokes/{id}', [JokeController::class, 'destroy'])->name('jokes.destroy');
