<?php

declare(strict_types=1);

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// TODO: Middleware para admin
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::apiResource('categories', CategoriesController::class)
            ->only(['store', 'update', 'destroy']);

        Route::apiResource('product', ProductController::class)
            ->only(['store', 'update', 'destroy']);
    });
