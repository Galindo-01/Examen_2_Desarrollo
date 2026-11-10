<?php

use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/vehiculos', [VehiculoController::class, 'index'])->name('vehiculos.index');
Route::post('/vehiculos', [VehiculoController::class, 'store'])->name('vehiculos.store');
