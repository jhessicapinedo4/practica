<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Models\Responsable;
use App\Http\Controllers\ResponsableController;
use App\Models\Mantenimiento;
use App\Http\Controllers\MantenimientoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::resource('equipos', EquipoController::class);
Route::resource('responsables', ResponsableController::class);
Route::resource('mantenimientos', MantenimientoController::class);