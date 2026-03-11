<?php

declare(strict_types=1);

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// TODO: Middleware para admin
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('categories', CategoriesController::class)
            ->only(['index', 'create', 'edit']);

        Route::resource('product', ProductController::class)
            ->only(['index', 'create', 'edit']);
    });
