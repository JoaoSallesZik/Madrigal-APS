<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('RA');
            $table->string('nome');
            $table->string('CPF');
            $table->string('RG');
            $table->string('email');
            $table->string('sexo');
            $table->date('dataNasc');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('CEP');
            $table->string('curso');
            $table->string('periodo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
