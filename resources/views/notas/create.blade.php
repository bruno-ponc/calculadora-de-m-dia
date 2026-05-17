@extends('layout')

@section('content')

<div class="row justify-content-center">

    <div class="col-12 col-lg-8">

        <div class="card p-4">

            <h2 class="mb-4 text-center">

                Cadastro de Notas

            </h2>

            <form action="{{ route('notas.store') }}" method="POST">

                @csrf

                                <div class="mb-4">

                    <label class="form-label">

                        Aluno

                    </label>

                    <select name="aluno_id"
                            class="form-select"
                            required>

                        <option value=""
                                selected
                                disabled>

                            Selecione um aluno

                        </option>

                        @foreach($alunos as $aluno)

                            <option value="{{ $aluno->id }}">

                                {{ $aluno->nome }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Turma

                    </label>

                    <select name="turma_id"
                            class="form-select"
                            required>

                        <option value=""
                                selected
                                disabled>

                            Selecione uma turma

                        </option>

                        @foreach($turmas as $turma)

                            <option value="{{ $turma->id }}">

                                {{ $turma->nome }}

                            </option>

                        @endforeach

                    </select>

                </div>


                <div class="row">

                    <div class="col-12 col-md-6 col-lg-3 mb-3">

                        <input type="number"
                               step="0.1"
                               name="nota1"
                               class="form-control"
                               placeholder="Nota 1"
                               required>

                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mb-3">

                        <input type="number"
                               step="0.1"
                               name="nota2"
                               class="form-control"
                               placeholder="Nota 2"
                               required>

                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mb-3">

                        <input type="number"
                               step="0.1"
                               name="nota3"
                               class="form-control"
                               placeholder="Nota 3"
                               required>

                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mb-4">

                        <input type="number"
                               step="0.1"
                               name="nota4"
                               class="form-control"
                               placeholder="Nota 4"
                               required>

                    </div>

                </div>

                <button class="btn btn-primary w-100">

                    Calcular Média

                </button>

            </form>

        </div>

    </div>

</div>

@endsection