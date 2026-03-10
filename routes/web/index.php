<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

// TODO: Middleware para autenticado
// Route::middleware('auth:sanctum')

Route::get('/', function () {
    return view('welcome');
});

Route::name('web.')
    ->group(function () {
        require __DIR__.'/admin.php';
    });
