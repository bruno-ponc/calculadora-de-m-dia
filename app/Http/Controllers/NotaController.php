<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\Aluno;
use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function create()
{
        $alunos = Aluno::all();

        $turmas = \App\Models\Turma::all();

    return view(
        'notas.create',
        compact('alunos', 'turmas')
    );
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

        if ($media >= 9) {
            $conceito = 'A';
            $mensagem = 'Aprovado com Louvor';
        }
        elseif ($media >= 7) {
            $conceito = 'B';
            $mensagem = 'Aluno Aprovado';
        }
        elseif ($media >= 4) {
            $conceito = 'C';
            $mensagem = 'Recuperação, Sua Chance de Passar';
        }
        else {
            $conceito = 'D';
            $mensagem = 'Poxa Vida, Vamos Tentar Novamente Ano Que Vem';
        }

        $nota = Nota::create([
            'aluno_id' => $request->aluno_id,
            'turma_id' => $request->turma_id,
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
            $nota->resultado_final = 'Aluno Aprovado na Recuperação';
        } else {
            $nota->resultado_final = 'Aluno Reprovado';
        }

        $nota->save();

        return view('notas.recuperacao_resultado', compact('nota'));
    }

    public function index()
    {
    $notas = Nota::with('aluno', 'turma')->get();

    return view('notas.index',
        compact('notas'));
    }

    public function resumo()
    {
        $notas = Nota::with('aluno', 'turma')->get();

        $turmas = Turma::all();

        return view('notas.resumo',
            compact('notas', 'turmas'));
    }

    public function edit($id)
    {
    $nota = Nota::findOrFail($id);

    if($nota->turma->fechada)
    {
        return redirect('/resumo')
            ->with('erro',
            'Turma Fechada!');
    }

    return view('notas.edit',
        compact('nota'));
    }

    public function update(Request $request, $id)
    {
        $nota = Nota::findOrFail($id);

        if($nota->turma->fechada)
        {
            return redirect('/resumo')
                ->with('erro',
                'Turma Fechada!');
        }

        $media = (
            $request->nota1 +
            $request->nota2 +
            $request->nota3 +
            $request->nota4
        ) / 4;

        $recuperacao = $request->recuperacao;

        if ($media >= 9) {

            $conceito = 'A';

            $mensagem = 'Aprovado Com Louvor';

        }
        elseif ($media >= 7) {

            $conceito = 'B';

            $mensagem = 'Aluno Aprovado';

        }
        elseif ($media >= 4) {

            $conceito = 'C';

            if($recuperacao &&
            ($media + $recuperacao) >= 10)
            {
                $mensagem =
                    'Aprovado na Recuperação';
            }
            else
            {
                $mensagem =
                    'Reprovado na Recuperação';
            }

        }
        else {

            $conceito = 'D';

            $mensagem =
                'Poxa Vida, Vamos Tentar Novamente Ano Que Vem';

        }

        $nota->update([

            'nota1' => $request->nota1,
            'nota2' => $request->nota2,
            'nota3' => $request->nota3,
            'nota4' => $request->nota4,

            'recuperacao' => $recuperacao,

            'media' => $media,

            'conceito' => $conceito,

            'resultado_final' => $mensagem

        ]);

        return redirect('/resumo')
            ->with('success',
            'Notas atualizadas!');
    }
}