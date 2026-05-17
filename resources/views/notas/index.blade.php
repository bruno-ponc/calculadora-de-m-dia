@extends('layout')

@section('content')

<h1 class="mb-4 text-center">

    Boletim Escolar

</h1>

<div class="table-responsive">

    <table class="table table-hover">

        <thead class="table-dark text-center">

            <tr>

                <th>Aluno</th>

                <th>Turma</th>

                <th>N1</th>
                <th>N2</th>
                <th>N3</th>
                <th>N4</th>

                <th>Média</th>

                <th>Recuperação</th>

                <th>Conceito</th>

                <th>Situação</th>

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

                    <td class="text-center">

                        {{ $nota->nota1 }}

                    </td>

                    <td class="text-center">

                        {{ $nota->nota2 }}

                    </td>

                    <td class="text-center">

                        {{ $nota->nota3 }}

                    </td>

                    <td class="text-center">

                        {{ $nota->nota4 }}

                    </td>

                    <!-- MÉDIA -->

                    <td class="text-center fw-bold">

                        @if($nota->media >= 7)

                            <span class="badge bg-success">

                                {{ number_format($nota->media, 1) }}

                            </span>

                        @else

                            <span class="badge bg-danger">

                                {{ number_format($nota->media, 1) }}

                            </span>

                        @endif

                    </td>

                    <!-- RECUPERAÇÃO -->

                    <td class="text-center">

                        @if($nota->recuperacao)

                            @if($nota->recuperacao >= 7)

                                <span class="badge bg-success">

                                    {{ $nota->recuperacao }}

                                </span>

                            @else

                                <span class="badge bg-danger">

                                    {{ $nota->recuperacao }}

                                </span>

                            @endif

                        @else

                            -

                        @endif

                    </td>

                    <!-- CONCEITO -->

                    <td class="text-center">

                        @if($nota->conceito == 'A')

                            <span class="badge bg-success">

                                A

                            </span>

                        @elseif($nota->conceito == 'B')

                            <span class="badge bg-success">

                                B

                            </span>

                        @elseif($nota->conceito == 'C')

                            @if(
                                $nota->recuperacao &&
                                ($nota->media + $nota->recuperacao) >= 10
                            )

                                <span class="badge bg-warning text-dark">

                                    C

                                </span>

                            @else

                                <span class="badge bg-danger">

                                    C

                                </span>

                            @endif

                        @else

                            <span class="badge bg-danger">

                                D

                            </span>

                        @endif

                    </td>

                    <!-- SITUAÇÃO -->

                    <td class="text-center">

                        @if($nota->conceito == 'A')

                            <span class="badge bg-success">

                                {{ $nota->resultado_final }}

                            </span>

                        @elseif($nota->conceito == 'B')

                            <span class="badge bg-success">

                                {{ $nota->resultado_final }}

                            </span>

                        @elseif($nota->conceito == 'C')

                            @if(
                                $nota->recuperacao &&
                                ($nota->media + $nota->recuperacao) >= 10
                            )

                                <span class="badge bg-warning text-dark">

                                    {{ $nota->resultado_final }}

                                </span>

                            @else

                                <span class="badge bg-danger">

                                    {{ $nota->resultado_final }}

                                </span>

                            @endif

                        @else

                            <span class="badge bg-danger">

                                {{ $nota->resultado_final }}

                            </span>

                        @endif

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection