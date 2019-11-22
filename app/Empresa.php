<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
            'nomeEmpresa',
            'CNPJ',
            'endereco',
            'telefone',
            'email'  
    ];

}
