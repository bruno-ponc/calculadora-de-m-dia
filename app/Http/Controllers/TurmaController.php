<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function fechar($id)
{
    $turma = Turma::findOrFail($id);

    $turma->fechada = true;

    $turma->save();

    return back();
}
}
