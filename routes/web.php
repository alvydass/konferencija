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

Route::get('/klientas', function () {
    return view('klientas');
})->name('klientas');

Route::get('/konferencija/{id}', function ($id) {
    $konferencijos = [
        1 => [
            'pavadinimas' => 'Pirma konferencija',
            'aprasymas' => 'Aprašymas apie pirmą konferenciją...'
        ],
        2 => [
            'pavadinimas' => 'Antra konferencija',
            'aprasymas' => 'Aprašymas apie antrą konferenciją...'
        ],
    ];

    if (array_key_exists($id, $konferencijos)) {
        return view('konferencija', ['konferencija' => $konferencijos[$id]]);
    } else {
        return 'Konferencija nerasta';
    }
})->name('konferencija');

Route::get('/darbuotojas', function () {
    return view('darbuotojas');
})->name('darbuotojas');

Route::get('/visos-konferencijos', function () {
    return view('visos_konferencijos');
})->name('visos_konferencijos');

Route::get('/konferencija/{id}/informacija', function ($id) {
    $konferencijos = [
        1 => [
            'pavadinimas' => 'Pirma konferencija',
            'aprasymas' => 'Aprašymas apie pirmą konferenciją...',
            'registracija' => [
                'Jonas Jonaitis',
                'Petras Petrauskas',
                'Ona Onaitė'
            ]
        ],
        2 => [
            'pavadinimas' => 'Antra konferencija',
            'aprasymas' => 'Aprašymas apie antrą konferenciją...',
            'registracija' => [
                'Marytė Marijampolė',
                'Antanas Antanaitis'
            ]
        ],
    ];

    if (array_key_exists($id, $konferencijos)) {
        return view('konferencija_informacija', ['konferencija' => $konferencijos[$id]]);
    } else {
        return 'Konferencija nerasta';
    }
})->name('konferencija_informacija');
