<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
    'aluno_id',
    'turma_id',
    'nota1',
    'nota2',
    'nota3',
    'nota4',
    'media',
    'conceito',
    'recuperacao',
    'resultado_final'
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function turma()
    {
        return $this->belongsTo(Turma::class);
    }
}