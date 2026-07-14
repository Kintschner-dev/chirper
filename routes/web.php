<?php

use App\Http\Controllers\ChirperController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChirperController::class, 'index']);
Route::post('/chirps', [ChirperController::class, 'store']);
Route::delete('/chirps/{chirp}', [ChirperController::class, 'destroy']);

route::resource('chirps', ChirperController::class)
    ->only(['store', 'edit', 'update', 'destroy']);