<?php

//use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\AsignarController;
//use App\Http\Controllers\BitacorasController;
//use App\Http\Controllers\ImportarController;
use App\Http\Controllers\RegistraruserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Ruta de inicio
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return view('auth.login');
    }
});

// Ruta del dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Auth::routes();


Route::get('/home',[App\Http\Controllers\HomeController::class ,'index'])->name('home');
Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/registrar', [RegistrarUserController::class, 'register'])->name('registerUser');



// Middleware de autenticación para las siguientes rutas
    
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Route::get('/asignar', [AsignarController::class, 'index']);
    //Route::get('/bitacoras', [BitacorasController::class, 'index']);
    //Route::get('/importar', [ImportarController::class, 'index']);
    //Route::get('/registrar', [RegistrarController::class, 'index']);
    //Route::get('/admin/dashboard', [HomeController::class, 'index']);
 


// Incluyendo las rutas de autenticación generadas por Laravel
require __DIR__.'/auth.php';

// Ruta home

