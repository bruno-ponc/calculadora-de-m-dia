@extends('layout')

@section('content')

<div class="card shadow p-4">

    <h2>Resultado</h2>

    <h4>Média: {{ number_format($nota->media, 1) }}</h4>

    <h4>Conceito: {{ $nota->conceito }}</h4>

    <div class="alert alert-info">
        {{ $mensagem }}
    </div>

    @if($nota->conceito == 'C')

        <form action="/notas/recuperacao/{{ $nota->id }}"
              method="POST">

            @csrf

            <label>Nota da Recuperação</label>

            <input type="number"
                   step="0.1"
                   name="recuperacao"
                   class="form-control">

            <button class="btn btn-warning mt-3">
                Enviar Recuperação
            </button>

        </form>

    @endif

    <a href="/"
       class="btn btn-primary mt-4">

        Voltar ao Menu

    </a>

</div>

@endsection