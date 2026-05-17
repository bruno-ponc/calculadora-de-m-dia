@extends('layout')

@section('content')

<div class="card shadow p-4">

    <h2 class="mb-4">

        Editar Notas

    </h2>

    <form action="/notas/update/{{ $nota->id }}"
          method="POST">

        @csrf

        <div class="row mb-4">

            <div class="col">

                <label>Nota 1</label>

                <input type="number"
                       step="0.1"
                       name="nota1"
                       value="{{ $nota->nota1 }}"
                       class="form-control">

            </div>

            <div class="col">

                <label>Nota 2</label>

                <input type="number"
                       step="0.1"
                       name="nota2"
                       value="{{ $nota->nota2 }}"
                       class="form-control">

            </div>

            <div class="col">

                <label>Nota 3</label>

                <input type="number"
                       step="0.1"
                       name="nota3"
                       value="{{ $nota->nota3 }}"
                       class="form-control">

            </div>

            <div class="col">

                <label>Nota 4</label>

                <input type="number"
                       step="0.1"
                       name="nota4"
                       value="{{ $nota->nota4 }}"
                       class="form-control">

            </div>

        </div>

        <div class="mb-4">

            <label>

                Recuperação

            </label>

            <input type="number"
                   step="0.1"
                   name="recuperacao"
                   value="{{ $nota->recuperacao }}"
                   class="form-control">

        </div>

        <button class="btn btn-primary">

            Atualizar

        </button>

        <a href="/resumo"
           class="btn btn-secondary">

            Voltar

        </a>

    </form>

</div>

@endsection