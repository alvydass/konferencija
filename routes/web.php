<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\ClientController;

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

Route::get('/client', function () {
    return view('client.client');
})->name('client');

Route::prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('client'); //
});

Route::prefix('conference')->group(function () {
    Route::get('show/{id}', [ConferenceController::class, 'show'])->name('conference.show');
    Route::get('register/{id}', [ConferenceController::class, 'register'])->name('conference.register');
    Route::post('/register', [ConferenceController::class, 'submitRegistration'])->name('conference.register.submit');
});

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


Route::get('/administratorius', function () {
    return view('administratorius');
})->name('administratorius');

Route::get('/naudotojai', function () {
    // Čia gali būti logika, kuri gražina visų naudotojų sąrašą
    return "Sistemos naudotojų sąrašas";
})->name('naudotojai');

Route::get('/naudotojai/{id}/redaguoti', function ($id) {
    // Čia gali būti logika redagavimo puslapio atvaizdavimui
    return view('redagavimo_puslapis', ['naudotojo_id' => $id]);
})->name('redaguoti_naudotoja');

Route::get('/konferencijos', 'ConferenceController@index')->name('konferenciju_sarasas');
Route::get('/konferencijos/kurti', 'ConferenceController@create')->name('konferenciju_kurimas');
Route::post('/konferencijos/sukurti', 'ConferenceController@store')->name('konferenciju_sukurimas');
Route::get('/konferencijos/redaguoti/{id}', 'ConferenceController@edit')->name('konferenciju_redagavimas');
Route::post('/konferencijos/redaguoti/{id}', 'ConferenceController@update')->name('konferenciju_keitimas');
