<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;

class TurmaController extends Controller
{
    public function create()
    {
        $turmas = Turma::all();

        return view('turmas.create', compact('turmas'));
    }

    public function store(Request $request)
    {
        Turma::create([
            'nome' => $request->nome
        ]);

        return redirect('/turmas/create')
            ->with('success',
            'Turma Cadastrada!');
    }

    public function fechar($id)
    {
        $turma = Turma::findOrFail($id);

        $turma->fechada = true;

        $turma->save();

        return back();
    }
}