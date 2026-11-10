
<?php

use App\Http\Controllers\ServisMobilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servis-mobil', [ServisMobilController::class, 'index'])
    ->name('servis-mobil.index');

Route::get('/servis-mobil/create', [ServisMobilController::class, 'create'])
    ->name('servis-mobil.create');

Route::post('/servis-mobil/store', [ServisMobilController::class, 'store'])
    ->name('servis-mobil.store');

Route::get('/servis-mobil/{servismobil}/edit', [ServisMobilController::class, 'edit'])
    ->name('servis-mobil.edit');

Route::put('/servis-mobil/{servismobil}', [ServisMobilController::class, 'update'])
    ->name('servis-mobil.update');
