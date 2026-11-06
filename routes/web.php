<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServisMobilController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servis-mobil', [ServisMobilController::class, 'index'])
    ->name('servis-mobil.index');

Route::get('/servis-mobil/create', [ServisMobilController::class, 'create'])
    ->name('servis-mobil.create');