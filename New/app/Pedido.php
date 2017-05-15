<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $timestamps = false;

    protected $table = 'pedidos';

    protected $fillable = [
        'funcionario_id', 
        'defeito', 
        'valor',
        'produto',
    ];

    //ao contrario do fillable, os atributos no guarded NUNCA
    //serao mudados via massassign
    protected $guarded = ['id'];

    public function funcionario()
    {
        return $this->belongsTo('App\Funcionario');
    }
}
