@extends('layout')

@section('content')

<div class="text-center">

    <h1 class="mb-4">
        Sistema Escolar
    </h1>

    <p class="mb-5">
        Escolha uma opção
    </p>

</div>

<div class="row">

    <div class="col-md-4">

        <div class="card shadow p-4 text-center">

            <h3>Cadastrar Turma</h3>

            <a href="/turmas/create"
               class="btn btn-primary mt-3">

                Acessar

            </a>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow p-4 text-center">

            <h3>Cadastrar Aluno</h3>

            <a href="/alunos/create"
               class="btn btn-success mt-3">

                Acessar

            </a>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow p-4 text-center">

            <h3>Lançar Notas</h3>

            <a href="/notas/create"
               class="btn btn-warning mt-3">

                Acessar

            </a>

        </div>

    </div>

</div>

@endsection