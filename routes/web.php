<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/manjatoharinaivo-completez-votre-reservation', function () {
    return view('manjatoharinaivo-completez-votre-reservation');
});

Route::get('/manjatoharinaivo-paiement', function () {
    return view('manjatoharinaivo-paiement');
});
