<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/contatos', function () { return PrincipalController::contatos();})->name('contatos');
Route::get('/cursos', function () { return PrincipalController::cursos();})->name('cursos');
Route::get('/departamentos', function () { return PrincipalController::departamentos();})->name('departamentos');

require __DIR__.'/auth.php';
