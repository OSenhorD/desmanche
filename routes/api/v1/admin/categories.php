<?php

declare(strict_types=1);

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::post('/categories', action: [CategoriesController::class, 'store']);
Route::put('/categories/{category}', action: [CategoriesController::class, 'update']);
Route::delete('/categories/{category}', action: [CategoriesController::class, 'destroy']);
