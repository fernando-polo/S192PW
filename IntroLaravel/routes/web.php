<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ruta de tipo GET
// Route::get('/', function () {
//     return view('welcome');
// });

// Ruta de tipo vista
Route::view('/', 'inicio')->name('rutainicio');

Route::view('/formulario', 'formulario')->name('rutaform');

Route::view('/clientes', 'clientes')->name('rutaclientes');

Route::view('/component', 'componentes')->name('rutacomponentes');



require __DIR__.'/auth.php';
