@extends('layout')

@section('content')

<div class="row justify-content-center">

    <div class="col-12 col-lg-6 mb-4">

        <div class="card p-4">

            <h2 class="mb-4 text-center">

                Cadastro de Turmas

            </h2>

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif

            <form action="/turmas/store"
                  method="POST">

                @csrf

                <div class="mb-4">

                    <input type="text"
                           name="nome"
                           class="form-control"
                           placeholder="Nome da turma"
                           required>

                </div>

                <button class="btn btn-primary w-100">

                    Cadastrar Turma

                </button>

            </form>

        </div>

    </div>

    <!-- TURMAS CADASTRADAS -->

    <div class="col-12 col-lg-6">

        <div class="card p-4">

            <h3 class="card-title mb-4">

                Turmas Cadastradas

            </h3>

            <div class="table-responsive">

                <table class="table table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>ID</th>

                            <th>Turma</th>

                            <th>Status</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($turmas as $turma)

                            <tr>

                                <td>

                                    {{ $turma->id }}

                                </td>

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

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection