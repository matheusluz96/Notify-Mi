<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $timestamps = false;

    protected $table = 'funcionarios';

    protected $fillable = [
        'nome', 
        'email', 
        'cpf',
        'cidade',
        'bairro',
        'rua',
        'celular',
        'telefone',
        'observacao',
        'cargo',
    ];

    //ao contrario do fillable, os atributos no guarded NUNCA
    //serao mudados via massassign
    protected $guarded = ['id'];
}
