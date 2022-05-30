<?php

use App\Http\Controllers\{
    UserController
};
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {return view('welcome');});
Route::get('/', [UserController::class, 'index'])->name('users.index');//rota da lista

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');//deletar user
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');//rota atualizar user
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');//editar usuario
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');//rota para criar user
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');//rota de detalhes do user