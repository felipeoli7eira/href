<?php

use Illuminate\Support\Facades\Route;

// * Rotas do painel administrativo
Route::name('p.' /* painel */)->prefix('p' /* painel */)->group(function(): void {

    Route::get('/', function(): void {
        var_dump('index panel');
    })->name('index');

    Route::get('dashboard', function(): void {
        var_dump('dashboard');
    })->name('dashboard');
});

// * Rota que recebe o nome do perfil de algum usuario
Route::get('/{profile}', [App\Http\Controllers\Profile::class, 'show'])
    ->name('profile')
    ->where('profile', '[a-z]+');

// * Qualquer rota nao mapeada
Route::fallback(function() {
    dd('NOT FOUND');
});