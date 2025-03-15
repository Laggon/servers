<?php

use App\Http\Controllers\DatabaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServerController;

Route::get('/', [IndexController::class, 'index']);

Route::get('/servers', [ServerController::class, 'index'])
    ->name('servers.index');
Route::get('/servers/create', [ServerController::class, 'create'])
    ->name('servers.create');
Route::post('/servers', [ServerController::class, 'store'])
    ->name('servers.store');
Route::get('/servers/{server}', [ServerController::class, 'show'])
    ->name('servers.show');
Route::get('/servers/{server}/edit', [ServerController::class, 'edit'])
    ->name('servers.edit');
Route::put('/servers/{server}', [ServerController::class, 'update'])
    ->name('servers.update');
Route::delete('/servers/{server}', [ServerController::class, 'destroy'])
    ->name('servers.destroy');

Route::resource('databases', DatabaseController::class);
