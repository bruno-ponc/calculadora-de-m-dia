@extends('layout')

@section('content')

<h1 class="mb-4 text-center">

    Resumo Geral

</h1>

<div class="row g-4">

    <!-- ALUNOS -->

    <div class="col-12 col-xl-8">

        <div class="card p-4">

            <h3 class="card-title mb-4">

                Informações dos Alunos

            </h3>

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>Aluno</th>

                            <th>Turma</th>

                            <th>Média</th>

                            <th>Ações</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($notas as $nota)

                            <tr>

                                <td>

                                    {{ $nota->aluno->nome }}

                                </td>

                                <td>

                                    {{ $nota->turma->nome }}

                                </td>

                                <td>

                                    {{ number_format($nota->media,1) }}

                                </td>

                                <td>

                                    @if($nota->turma && !$nota->turma->fechada)

                                        <a href="/notas/edit/{{ $nota->id }}"
                                           class="btn btn-primary btn-sm">

                                            Editar

                                        </a>

                                    @else

                                        <span class="badge bg-danger">

                                            Bloqueado

                                        </span>

                                    @endif

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <!-- TURMAS -->

    <div class="col-12 col-xl-4">

        <div class="card p-4">

            <h3 class="card-title mb-4">

                Controle das Turmas

            </h3>

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>Turma</th>

                            <th>Status</th>

                            <th>Ação</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($turmas as $turma)

                            <tr>

                                <td>

                                    {{ $turma->nome }}

                                </td>

                                <td>

                                    @if($turma->fechada)

                                        <span class="badge bg-danger">

                                            Fechada

                                        </span>

                                    @else

                                        <span class="badge bg-success">

                                            Aberta

                                        </span>

                                    @endif

                                </td>

                                <td>

                                    @if(!$turma->fechada)

                                        <form action="/turma/fechar/{{ $turma->id }}"
                                              method="POST">

                                            @csrf

                                            <button class="btn btn-primary btn-sm">

                                                Fechar

                                            </button>

                                        </form>

                                    @else

                                        <span class="text-danger">

                                            Bloqueada

                                        </span>

                                    @endif

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection