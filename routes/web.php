<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/turmas/create',
    [TurmaController::class, 'create']);

Route::post('/turmas/store',
    [TurmaController::class, 'store']);

Route::get('/alunos/create',
    [AlunoController::class, 'create']);

Route::post('/alunos/store',
    [AlunoController::class, 'store']);

Route::get('/notas/create',
    [NotaController::class, 'create']);

Route::post('/notas/store',
    [NotaController::class, 'store']);

Route::post('/notas/recuperacao/{id}',
    [NotaController::class, 'recuperacao']);

Route::post('/turma/fechar/{id}',
    [TurmaController::class, 'fechar']);

Route::get('/notas',
    [NotaController::class, 'index']);

    Route::get('/resumo',
    [NotaController::class, 'resumo']);

    Route::get('/notas/edit/{id}',
    [NotaController::class, 'edit']);

Route::post('/notas/update/{id}',
    [NotaController::class, 'update']);