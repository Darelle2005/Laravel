<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cnicontroller;

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

Route::get('/', [cnicontroller::class, 'index']);
    

Route::post('/Modele', [cnicontroller::class, 'traiterFormulaire'])->name('traitement');
Route::get('/recherche', [cnicontroller::class, 'rechercher'])->name('recherche');
Route::get('/details/{id}', [cnicontroller::class, 'details'])->name('autre.vue');


/*use App\Http\Controllers\control;

*/
/*Route::post('/perdu', [control::class, 'traiterFormulaire'])->name('traiter-formulaire');
Route::get('/formulaire', [Control::class, 'afficherFormulaire'])->name('afficher-formulaire');

*/