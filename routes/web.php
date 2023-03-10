<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', function () {
    return view('pages.home');
});

// mostra il contenuto index riprendendo la funzione in Main Controller
Route::get('/', [MainController::class, 'home'])
    ->name('home');

// prende la funzione 'delete' e la porta in index 
Route::get('/hero/delete/{hero}', [MainController::class, 'heroDelete'])
    ->name('hero.delete');

// prende la funzione 'create' per creare un nuovo eroe 
Route::get('/hero/create', [MainController::class, 'heroCreate'])
    ->name('hero.create');

// rotta per la ricezione dei dati dal form: crea eroe 
Route::post('/hero/store', [MainController::class, 'heroStore'])
    ->name('hero.store');