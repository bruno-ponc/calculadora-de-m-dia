<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;

class AlunoController extends Controller
{
    public function create()
    {
        $turmas = Turma::all();

        return view('alunos.create', compact('turmas'));
    }

    public function store(Request $request)
    {
        Aluno::create([
            'nome' => $request->nome
        ]);

        return redirect('/alunos/create')
            ->with('success',
            'Aluno Cadastrado!');
    }
}