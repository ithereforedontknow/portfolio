<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MyController::class, 'index']);

Route::get('about', [MyController::class, 'about']);

Route::get('contact', [MyController::class, 'contact']);
