<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
>>>>>>> fb0a5e9 (Quero me matar)

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

<<<<<<< HEAD
Route::get('/contatos', function () { return PrincipalController::contatos();})->name('contatos');
Route::get('/cursos', function () { return PrincipalController::cursos();})->name('cursos');
Route::get('/departamentos', function () { return PrincipalController::departamentos();})->name('departamentos');

=======
Route::match(['get', 'post'], '/contatos', function (Request $request) {
    $dados = null;

    if ($request->isMethod('post')) {
        $dados = $request->all(); // pega todos os dados enviados
    }

    return view('contatos', compact('dados'));
})->name('contatos');
Route::get('/cursos', function () { return PrincipalController::cursos();})->name('cursos');
Route::get('/departamentos', function () { return PrincipalController::departamentos();})->name('departamentos');
Route::fallback(function () {
    return response()->view('errors.custom-404', [], 404);
});

Route::match(['get', 'post'], '/contatos', function (Request $request) {
    $dados = null;

    if ($request->isMethod('post')) {
        $dados = $request->all(); // captura os dados enviados
    }

    return view('contatos', compact('dados'));
})->name('contatos');
>>>>>>> fb0a5e9 (Quero me matar)
require __DIR__.'/auth.php';
