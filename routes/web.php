<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ParametresController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/inscription', function () {
    return view('pages.inscription');
})->name('inscription');
Route::post('/inscription', 'InscriptionController@store')->name('inscription.submit');

Route::get('/connexion', function () {
    return view('pages.connexion');
})->name('connexion');
Route::post('/connexion', 'ConnexionController@store')->name('connexion.submit');

Route::get('/game', [GameController::class, 'index'])->name('game');


Route::get('/game/{slug}', [GameController::class, 'show'])->name('game.show');


Route::get('/create', function () {
    return view('pages.game.create');
})->name('create');

Route::post('/game/store', [GameController::class, 'store'])->name('game.store');

Route::get('/edit', function () {
    return view('pages.game.edit');
})->name('edit');

Route::get('/parametres', function () {
    return view('pages.parametres');
})->name('parametres');

Route::post('/parametres/update', [ParametresController::class, 'update'])->name('parametres.update');

Route::middleware(['auth'])->group(function () {
    Route::get('/parametres', function () {
        return view('pages.parametres');
    })->name('parametres');
    
    Route::post('/parametres/update', [ParametresController::class, 'update'])->name('parametres.update');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

require __DIR__ . '/auth.php';

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
