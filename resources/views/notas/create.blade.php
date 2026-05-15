@extends('layout')

@section('content')

<div class="card shadow p-4">

    <h2 class="mb-4">Cadastrar Notas</h2>

    <form action="/notas/store" method="POST">
        @csrf

        <div class="mb-3">
            <label>Aluno</label>

            <select name="aluno_id" class="form-control">
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}">
                        {{ $aluno->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="row">

            <div class="col">
                <input type="number"
                       step="0.1"
                       name="nota1"
                       class="form-control"
                       placeholder="Nota 1">
            </div>

            <div class="col">
                <input type="number"
                       step="0.1"
                       name="nota2"
                       class="form-control"
                       placeholder="Nota 2">
            </div>

            <div class="col">
                <input type="number"
                       step="0.1"
                       name="nota3"
                       class="form-control"
                       placeholder="Nota 3">
            </div>

            <div class="col">
                <input type="number"
                       step="0.1"
                       name="nota4"
                       class="form-control"
                       placeholder="Nota 4">
            </div>

        </div>

        <button class="btn btn-primary mt-4">
            Calcular Média
        </button>

    </form>

</div>

@endsection