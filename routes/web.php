<?php

use App\Http\Controllers\DivisiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/divisi',
    [DivisiController::class, 'index'])
    ->name('divisi.index');

Route::get('/divisi/create',
    [DivisiController::class, 'create'])
    ->name('divisi.create');

Route::post('/divisi',
    [DivisiController::class, 'store'])
    ->name('divisi.store');

Route::get('/divisi/{divisi}/edit',
    [DivisiController::class, 'edit'])
    ->name('divisi.edit');

Route::put('/divisi/{divisi}',
    [DivisiController::class, 'update'])
    ->name('divisi.update');

Route::delete('/divisi/{divisi}',
    [DivisiController::class, 'destroy'])
    ->name('divisi.destroy');