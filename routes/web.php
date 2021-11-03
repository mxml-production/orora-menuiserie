<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RealisationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [PageController::class, 'index']);
Route::get('/entreprise', [PageController::class, 'about']);
Route::get('/realisation', [PageController::class, 'realisation']);
Route::get('/catalogue', [PageController::class, 'catalogue']);
Route::get('/mentions-legales', [PageController::class, 'mentionsLegales']);

Route::post('/message', [MessageController::class, 'store']);

Route::group(['middleware' => 'auth'], function() {
    //page home
    Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');
    //page avis
    Route::resource('/avis', AvisController::class)->names([
        'index' => "avis"
    ]);
    // messages
    Route::delete('message/{id}', [MessageController::class, 'destroy']);
    Route::put('/message/{id}', [MessageController::class, 'update']);
    // realisations
    Route::resource('/realisations', RealisationController::class)->names([
        'index' => "realisations"
    ]);
    // informations
    Route::get('informations/{information}/edit', [InformationController::class, 'edit']);
    Route::put('informations/{information}', [InformationController::class, 'update']);
    // Route::delete('informations/{information}', [InformationController::class, 'destroy']);
    // banner
    Route::get('/banner/{banner}/edit', [BannerController::class, 'edit']);
    Route::put('/banner/{banner}', [BannerController::class, 'update']);
    Route::get('/banner', [BannerController::class, 'index'])->name('banner');
    // catalogues
    Route::get('/catalogues', [CatalogueController::class, 'index'])->name('catalogues');
    Route::get('/catalogues/{id}/edit', [CatalogueController::class, 'edit']);
    Route::put('/catalogues/{id}', [CatalogueController::class, 'update']);
});

require __DIR__.'/auth.php';
