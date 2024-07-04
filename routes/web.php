<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
})->name('index'); //damos nome para rota para poder chamar ela pra chamar ela dps qnd eu quiser

Route::get('/animais', [AnimaisController::class, 'index'])->name('animais');

Route::get('/animais/cadastrar', [AnimaisController::class, 'cadastrar'])->name('animais.cadastrar');

Route::post('/animais/cadastrar',[AnimaisController::class, 'gravar'])->name('animais.gravar');

Route::get('/animais/apagar{animal}',[AnimaisController::class, 'apagar'])->name('animais.apagar');

Route::delete('/animais/apagar{animal}',[AnimaisController::class, 'deletar']);

Route::get('/animais/editar/{animal}', [AnimaisController::class, 'editar'])->name('animais.editar');

Route::put('/animais/editar/{animal}', [AnimaisController::class, 'editarGravar']);

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios');

Route::get('/usuarios/cadastrar', [UsuarioController::class, 'cadastrar'])->name('usuarios.cadastrar');

Route::post('/usuarios/cadastrar',[UsuarioController::class, 'gravar'])->name('usuarios.gravar');