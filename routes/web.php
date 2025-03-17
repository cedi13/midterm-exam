<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;

Route::get('/', function () {
    return view('welcome');
});

// Define the new route


Route::get('/JunasJohnCedric', [FeatureController::class, 'index']);
