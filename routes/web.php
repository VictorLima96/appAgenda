<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/',[ContatoController::class, 'index'])->name('index');
Route::get('/cadastrar',[ContatoController::class, 'exibirFormContato'])->name('formulario-contato');
Route::post('/cadastrar',[ContatoController::class, 'createContato'])->name('cadastrar-contato');
Route::get('/todosContato',[ContatoController::class, 'exibirGerenciador'])->name('todos-contato');
Route::delete('/todosContato/{id}',[ContatoController::class, 'delete'])->name('todos-contato');
Route::put('/todosContato/{id}',[ContatoController::class, 'update'])->name('alterar-contato');