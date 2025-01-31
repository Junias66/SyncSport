<?php

use App\Http\Controllers\CategAgeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamTypeController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/se connecter', [ClubController::class, 'log'])->name('log-in');
Route::get('/inscription', [ClubController::class, 'create'])->name('sign-in');
Route::post('/inscription-club', [ClubController::class, 'store'])->name('store.club');

Route::post('/login', [ClubController::class, 'login'])->name('logine');
Route::get('account/activate/{token}', [ClubController::class, 'activate'])->name('account.activate');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ClubController::class, 'show'])->name('dashboard');
});

Route::post('/deconnexion', [ClubController::class, 'destroy'])->name('logout');

//TypesEquipes
Route::middleware(['auth'])->group(function(){
    Route::get('/ajouter/type/equipe', [TeamTypeController::class, 'create'])->name('create.team.type');
    Route::post('/ajouter', [TeamTypeController::class, 'store'])->name('store.team.type');
    Route::get('/liste/type/équipes', [TeamTypeController::class, 'index'])->name('index.team.type'); 
});

//Equipes
Route::middleware(['auth'])->group(function(){
    Route::resource('teams', TeamController::class);
});

//Position 
Route::middleware(['auth'])->group(function(){
    Route::resource('positions', PositionController::class);
});

//Catégorie d'âge
Route::middleware(['auth'])->group(function(){
    Route::resource('categories', CategAgeController::class);
});
