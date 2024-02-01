<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cnicontroller;
use App\Http\Controllers\passportcontrol;
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
    return view('index');
});
Route::post('/Modele', [cnicontroller::class, 'traiterFormulaire'])->name('traitement');
Route::post('/passport', [passportcontrol::class, 'traiterFormulaire']);

/*use App\Http\Controllers\control;

*/
/*Route::post('/perdu', [control::class, 'traiterFormulaire'])->name('traiter-formulaire');
Route::get('/formulaire', [Control::class, 'afficherFormulaire'])->name('afficher-formulaire');

*/