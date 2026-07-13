<?php

use App\Http\Controllers\ChirpeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChirpeController::class, 'index']);

