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
})->name('main');


Route::prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('client');
});

Route::prefix('employee')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employee');
});

Route::prefix('conference')->group(function () {
    Route::get('show/{conference}', [ConferenceController::class, 'show'])->name('conference.show');
    Route::get('/conference/show-with-clients/{conference_id}', [ConferenceController::class, 'showWithClients'])
        ->name('conference.show-with-clients');
    Route::get('register/{id}', [ConferenceController::class, 'register'])->name('conference.register');
    Route::post('/register', [ConferenceController::class, 'submitRegistration'])->name('conference.register.submit');
    Route::get('/add', [ConferenceController::class, 'create'])->name('conference-add');
    Route::get('/conference/edit/{encodedConference}', [ConferenceController::class, 'edit'])->name('conference-edit');
    Route::post('/conference/delete/{id}', [ConferenceController::class, 'delete'])->name('conference-delete');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('conferences', [ConferenceController::class, 'list'])->name('conference.list');
});

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user');
    Route::get('{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('{id}/update', [UserController::class, 'update'])->name('user.update');
});

Route::match(['get', 'post'], '/save-success', function () {
    return "Save success";
})->name('save-success');

Route::get('/login', function () {
    return "Login Page";
})->name('login');

Route::get('/logout', function () {
    return "Logged out";
})->name('logout');
