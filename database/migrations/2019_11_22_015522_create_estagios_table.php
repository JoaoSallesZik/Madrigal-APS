<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstagiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estagios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_aluno');
            $table->string('id_empresa');
            $table->string('cargaHoraria');
            $table->date('dataInicio');
            $table->date('dataTermino');
            $table->string('horaEntrada');
            $table->string('horasRealizadas');
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
        Schema::dropIfExists('estagios');
    }
}
