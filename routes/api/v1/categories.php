<?php

declare(strict_types=1);

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::get('/categories', action: [CategoriesController::class, 'index']);
Route::get('/categories/{category}', action: [CategoriesController::class, 'show']);
