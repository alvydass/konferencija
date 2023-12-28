<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthenticateCustom;
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

Route::get('/main', function () {
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
    Route::post('/store', [ConferenceController::class, 'store'])->name('conference-store');
    Route::get('/conference/edit/{encodedConference}', [ConferenceController::class, 'edit'])->name('conference-edit');
    Route::post('/conference/delete/{id}', [ConferenceController::class, 'delete'])->name('conference-delete');
    Route::post('/conference/update/{id}', [ConferenceController::class, 'update'])->name('conference-update');
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


Route::middleware([AuthenticateCustom::class])->group(function () {
    Route::get('/', function () {
        return view('main');
    })->name('main');
});

// Route to show the login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route to handle login logic
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

