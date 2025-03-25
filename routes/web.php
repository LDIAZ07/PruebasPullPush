<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/cliente', 'App\Http\Controllers\ClienteController');

Route::resource('/compras', 'App\Http\Controllers\ProveedorController');
