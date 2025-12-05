<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('clientes', ClientesController::class);
    Route::resource('mesas', MesaController::class);
    Route::resource('funcionarios', FuncionariosController::class);
    Route::resource('reservas', ReservasController::class);
    Route::resource('fornecedores', FornecedorController::class);

});

require __DIR__.'/auth.php';
