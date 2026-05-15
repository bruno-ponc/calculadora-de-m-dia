<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function create()
    {
        $alunos = Aluno::all();

        return view('notas.create', compact('alunos'));
    }

    public function store(Request $request)
    {
        $media = (
            $request->nota1 +
            $request->nota2 +
            $request->nota3 +
            $request->nota4
        ) / 4;

        $conceito = '';
        $mensagem = '';

        if ($media > 9) {
            $conceito = 'A';
            $mensagem = 'Aprovado com Louvor';
        }
        elseif ($media > 7) {
            $conceito = 'B';
            $mensagem = 'Aluno Aprovado';
        }
        elseif ($media > 4) {
            $conceito = 'C';
            $mensagem = 'Recuperação, sua chance de passar';
        }
        else {
            $conceito = 'D';
            $mensagem = 'Poxa vida, vamos tentar novamente ano que vem';
        }

        $nota = Nota::create([
            'aluno_id' => $request->aluno_id,
            'nota1' => $request->nota1,
            'nota2' => $request->nota2,
            'nota3' => $request->nota3,
            'nota4' => $request->nota4,
            'media' => $media,
            'conceito' => $conceito,
            'resultado_final' => $mensagem
        ]);

        return view('notas.resultado', compact(
            'nota',
            'mensagem'
        ));
    }

    public function recuperacao(Request $request, $id)
    {
        $nota = Nota::findOrFail($id);

        $nota->recuperacao = $request->recuperacao;

        $soma = $nota->media + $nota->recuperacao;

        if ($soma >= 10) {
            $nota->resultado_final = 'Aluno aprovado na recuperação';
        } else {
            $nota->resultado_final = 'Aluno reprovado';
        }

        $nota->save();

        return view('notas.recuperacao_resultado', compact('nota'));
    }
}