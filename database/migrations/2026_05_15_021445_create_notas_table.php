<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {

            $table->id();

            // ALUNO

            $table->foreignId('aluno_id')
                  ->constrained()
                  ->onDelete('cascade');

            // TURMA

            $table->foreignId('turma_id')
                  ->constrained()
                  ->onDelete('cascade');

            // NOTAS

            $table->double('nota1');

            $table->double('nota2');

            $table->double('nota3');

            $table->double('nota4');

            // RESULTADOS

            $table->double('media')->nullable();

            $table->string('conceito')->nullable();

            $table->double('recuperacao')->nullable();

            $table->string('resultado_final')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};