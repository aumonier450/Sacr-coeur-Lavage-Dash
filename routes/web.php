<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
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


/* Debut de la route pour l'admin */
Route::prefix('admin')->group(function(){
 Route::get('/Reservation en attente',[AdminController::class,'index'])->name('reservation');
 Route::get('/Reservation Validé',[AdminController::class,'index1'])->name('reservationV');
 Route::get('/comptabilité',[AdminController::class,'COMPTA'])->name('comptabilité');
 Route::get('/Edit profil',[AdminController::class,'EDITP'])->name('Editprofil');


});




/* Fin de la route pour l'admin */



/*  debut de la route client */
Route::prefix('client')->group(function(){
    Route::get('/Acceuil',[ClientController::class,'indexClient'])->name('Acceuil');

});

/*  Fin de la route client*/



Route::get('/', function () {
    return view('Client.dash');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
