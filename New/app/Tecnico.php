<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    public $timestamps = false;

    protected $table = 'tecnicos';

    protected $fillable = [
        'nome', 
        'cidade', 
        'bairro',
        'rua',
        'email',
        'avaliacao',
        'telefone1',
        'telefone2',
        'cpf',
        'observacao',
    ];

    //ao contrario do fillable, os atributos no guarded NUNCA
    //serao mudados via massassign
    protected $guarded = ['id'];
}
