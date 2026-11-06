<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servis-mobil', function () {
   return view('servis-mobil.index', ['title' => 'servis-mobil']);
});

Route::get('/servis-mobil/create', function () {
   return view('servis-mobil.create',['title' => 'create servis-mobil']);
});

