@extends('layout')

@section('content')

<div class="card p-4 shadow">

    <h2>Cadastrar Turma</h2>

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    <form action="/turmas/store" method="POST">

        @csrf

        <input type="text"
               name="nome"
               class="form-control"
               placeholder="Nome da Turma">

        <button class="btn btn-primary mt-3">

            Salvar

        </button>

    </form>

</div>

@endsection