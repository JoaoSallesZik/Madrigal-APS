<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Estagio extends Model
{
    protected $fillable = [
            'id_aluno',
            'id_empresa',
            'cargaHoraria',
            'dataInicio',
            'dataTermino',
             'horaEntrada',
            'horaSaida',
            'horasRealizadas'

            
            
    ];

}
