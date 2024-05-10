<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AsignarController;
use App\Http\Controllers\BitacorasController;
use App\Http\Controllers\ImportarController;
use App\Http\Controllers\RegistrarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/asignar', [AsignarController::class, 'index']);
Route::get('/bitacoras', [BitacorasController::class, 'index']);
Route::get('/importar', [ImportarController::class, 'index']);
Route::get('/registrar', [RegistrarController::class, 'index']);



require __DIR__.'/auth.php';
