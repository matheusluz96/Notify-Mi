<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
    //essa variavel desativa as operações do BD com os atributos 'created_at' 'updated_at'
    public $timestamps = false;

    //normalmente o Eloquent tenta achar o nome da tabela
    //com relação ao nome da classe do Modelo, para isso
    //ele coloca a primeira letra da classe em maiusculo
    //e em plural, Produto...tem a tabela...'produtos'
    //Se o nome da tabela for diferente, basta avisarmos
    //o Eloquent do nome certo da tabela desta maneira:
    protected $table = 'produtos';

    //abaixo serao listados apenas os atributos que poderao
    //ser modificados quando tentamos fazer um update em massa;
    protected $fillable = [
        'nome', 
        'descricao', 
        'quantidade',
        'valor',
        'tamanho',
        'categoria_id',
    ];

    //ao contrario do fillable, os atributos no guarded NUNCA
    //serao mudados via massassign
    protected $guarded = ['id'];

    //relacionamento entre tabelas
    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
}
