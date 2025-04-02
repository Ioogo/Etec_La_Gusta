<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', function () { return PrincipalController::principal();})->name('principal');
Route::get('/contatos', function () { return PrincipalController::contatos();})->name('contatos');
Route::get('/cursos', function () { return PrincipalController::cursos();})->name('cursos');
Route::get('/departamentos', function () { return PrincipalController::departamentos();})->name('departamentos');