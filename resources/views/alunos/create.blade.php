@extends('layout')

@section('content')

<div class="row justify-content-center">

    <div class="col-12 col-lg-6 mb-4">

        <div class="card p-4">

            <h2 class="mb-4 text-center">

                Cadastro de Alunos

            </h2>

            @if(session('success'))

                <div class="alert alert-success">

                    {{ session('success') }}

                </div>

            @endif

            <form action="/alunos/store"
                  method="POST">

                @csrf

                <div class="mb-4">

                    <input type="text"
                           name="nome"
                           class="form-control"
                           placeholder="Nome do aluno"
                           required>

                </div>

                <button class="btn btn-primary w-100">

                    Cadastrar Aluno

                </button>

            </form>

        </div>

    </div>

    <!-- ALUNOS CADASTRADOS -->

    <div class="col-12 col-lg-6">

        <div class="card p-4">

            <h3 class="card-title mb-4">

                Alunos Cadastrados

            </h3>

            <div class="table-responsive">

                <table class="table table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>ID</th>

                            <th>Aluno</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($alunos as $aluno)

                            <tr>

                                <td>

                                    {{ $aluno->id }}

                                </td>

                                <td>

                                    {{ $aluno->nome }}

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