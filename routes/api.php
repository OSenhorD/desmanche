<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::prefix('v1')
    ->name('api.')
    ->group(function () {
        // Route::apiResource('product', ProductController::class)
        //     ->only(['index', 'show']);
    });
