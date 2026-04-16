<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;

Route::get('/active-categories', [CategoryController::class, 'getActiveCategories']);
Route::apiResource('/cars', CarController::class);
Route::apiResource('/categories', CategoryController::class);