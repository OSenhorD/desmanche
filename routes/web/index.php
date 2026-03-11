<?php

declare(strict_types=1);

use App\Livewire\User\Profile;
use App\Livewire\Users\Index;
use Illuminate\Support\Facades\Route;

// TODO: Middleware para autenticado

Route::get('/', function () {
    return view('welcome');
});

Route::name('web.')
    ->group(function () {
        require __DIR__.'/admin.php';
    });

Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/users', Index::class)->name('users.index');
    Route::get('/user/profile', Profile::class)->name('user.profile');
});

require __DIR__.'/auth.php';
