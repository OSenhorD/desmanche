<?php

declare(strict_types=1);

use App\Http\Controllers\MercadoLivreController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')
    ->name('api.')
    ->group(function () {
        Route::prefix('integrations')
            ->name('integrations.')
            ->group(function () {
                Route::prefix('mercadolivre')
                    ->name('mercadolivre.')
                    ->group(function () {
                        Route::get('/login', [MercadoLivreController::class, 'login']);
                        Route::get('/callback', [MercadoLivreController::class, 'callback']);
                        Route::get('/webhook', [MercadoLivreController::class, 'webhook']);
                    });
            });
    });
