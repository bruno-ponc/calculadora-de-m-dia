<?php

use App\Http\Controllers\NotaController;

Route::post('/turma/fechar/{id}',
    [TurmaController::class, 'fechar']
);

Route::get('/notas/create', [NotaController::class, 'create']);

Route::post('/notas/store', [NotaController::class, 'store']);

Route::post('/notas/recuperacao/{id}',
    [NotaController::class, 'recuperacao']
);