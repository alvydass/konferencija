<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
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


Route::prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('client');
});

Route::prefix('employee')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employee');
});

Route::prefix('conference')->group(function () {
    Route::get('show/{id}', [ConferenceController::class, 'show'])->name('conference.show');
    Route::get('show-with-clients/{id}', [ConferenceController::class, 'showWithClients'])->name('conference.show-with-clients');
    Route::get('register/{id}', [ConferenceController::class, 'register'])->name('conference.register');
    Route::post('/register', [ConferenceController::class, 'submitRegistration'])->name('conference.register.submit');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('conferences', [ConferenceController::class, 'list'])->name('conference.list');
});

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user');
    Route::get('{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('{id}', [UserController::class, 'update'])->name('user.update');
});



Route::get('/users', function () {

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
