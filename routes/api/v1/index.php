<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

// TODO: Middleware para autenticado
// Route::middleware('auth:sanctum')
Route::prefix('v1')
    ->group(function () {
        require __DIR__.'/admin/index.php';
        require __DIR__.'/categories.php';
    });
