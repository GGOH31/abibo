<?php

use App\Http\Controllers\Back\FrontController as BackFrontController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/accueil', [FrontController::class,'accueil'])->name('accueil');
Route::get('/', [FrontController::class,'accueil'])->name('accueil');
Route::get('/about', [FrontController::class,'about'])->name('about');
Route::get('/chambre', [FrontController::class,'allItem'])->name('chambre');
Route::get('/detail/{name}', [FrontController::class,'detailItem'])->name('chambre');

Route::post('/reserver', [FrontController::class,'reserver'])->name('reserver');

Route::get('/login', [BackController::class,'login'])->name('login');
Route::get('/logout', [BackController::class,'logout'])->name('logout');
Route::post('/login', [BackController::class,'connexion'])->name('login');




Route::middleware(['auth'])->group(function()
{
    
    Route::get('/accueil', [BackController::class,'accueil'])->name('accueil');

    Route::get('/reservation', [BackController::class,'reservation'])->name('reservation');
    Route::get('/galerie', [BackController::class,'galerie'])->name('galerie');
    Route::get('/event', [BackController::class,'event'])->name('event');
    Route::get('/chambre-liste', [BackController::class,'chambre'])->name('chambre-liste');
    Route::get('/front-liste', [BackFrontController::class,'listeFront'])->name('front-liste');
    Route::post('/front-liste', [BackFrontController::class,'editFront'])->name('front-liste');
    
    
});




