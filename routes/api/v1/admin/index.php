<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

// TODO: Middleware para admin
Route::prefix('admin')
    ->group(function () {
        require __DIR__.'/users.php';
        require __DIR__.'/categories.php';
    });
