<?php

use App\Http\Controllers\AnnoncesController;
use App\Http\Controllers\ButController;
use App\Http\Controllers\CartonController;
use App\Http\Controllers\CategAgeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\CoachTypeController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EntrainementController;
use App\Http\Controllers\LieuTerrainController;
use App\Http\Controllers\MatcheController;
use App\Http\Controllers\NumeroController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamTypeController;
use App\Http\Controllers\TypeButController;
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
   Route::resource('team_type', TeamController::class);
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

//Numero 
Route::middleware(['auth'])->group(function(){
    Route::resource('numero', NumeroController::class);
});
//Terrain 
Route::middleware(['auth'])->group(function(){
    Route::resource('terrain', LieuTerrainController::class);
});
//carton  
Route::middleware(['auth'])->group(function(){
    Route::resource('carton', CartonController::class);
});
//but
Route::middleware(['auth'])->group(function(){
    Route::resource('but',ButController::class);
});
//annonce
Route::middleware(['auth'])->group(function(){
    Route::resource('annonces', AnnoncesController::class);
});
//coach
Route::middleware(['auth'])->group(function(){
    Route::resource('coach', CoachTypeController::class);
});
//competition
Route::middleware(['auth'])->group(function(){
    Route::resource('competition', CompetitionController::class);
});
//document
Route::middleware(['auth'])->group(function(){
    Route::resource('document', DocumentController::class);
});
//entrainement
Route::middleware(['auth'])->group(function(){
    Route::resource('entrainement', EntrainementController::class);
});
//matche
Route::middleware(['auth'])->group(function(){
    Route::resource('matche', MatcheController::class);
});