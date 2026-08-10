<?php

use App\Http\Controllers\DivisiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/divisi', [DivisiController::class,'index'])->name('divisi.index');

