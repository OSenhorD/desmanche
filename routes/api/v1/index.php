<?php

declare(strict_types=1);

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

// TODO: Middleware para autenticado
// Route::middleware('auth:sanctum')
Route::prefix('v1')
    ->name('api.')
    ->group(function () {
        require __DIR__.'/admin.php';

        Route::apiResource('categories', CategoriesController::class)
            ->only(['index', 'show']);
    });
