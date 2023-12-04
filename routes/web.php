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

Route::get('/', function () {
    return view('main');
});

Route::get('/klientas', function () {
    return "Kliento posistemis - Jūs esate klientas";
})->name('klientas');

Route::get('/darbuotojas', function () {
    return "Darbuotojo posistemis - Jūs esate darbuotojas";
})->name('darbuotojas');

Route::get('/administratorius', function () {
    return "Sistemos administratoriaus posistemis - Jūs esate administratorius";
})->name('administratorius');
