<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
            'nome',
            'RA',
            'CPF',
            'RG',
            'sexo',
            'email',
            'dataNasc',
            'telefone',
            'CEP',
            'endereco',
            'bairro',
            'curso',
            'periodo'  
    ];

}


