@extends('layout')

@section('content')

<div class="card shadow p-4">

    <h2>Resultado Final</h2>

    <h4>Média: {{ $nota->media }}</h4>

    <h4>Recuperação: {{ $nota->recuperacao }}</h4>

    <h4>
        {{ $nota->resultado_final }}
    </h4>

</div>

@endsection