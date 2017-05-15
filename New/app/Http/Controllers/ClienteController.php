<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

class ClienteController extends Controller {
    public function __construct()
    {
        $this->middleware('autorizador');
    }
/*    public function lista()
    {
        $produtos = DB::select('select * from produtos');

        return view('listagem')->with('produtos', $produtos);
    }
    public function mostra()
    {
        $id = Request::route('id');
        $produto = DB::select('select * from produtos where id = ?', [$id]);

        return view('detalhes')->with('p', $produto[0]);
    }*/

    public function cadastro()
    {
        return view('Cliente\cadastro_cliente');
    }

/*    public function adiciona()
    {
        //info formulario
        $nome = Request::input('nome');
        $quantidade = Request::input('quantidade');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');
        //salvar bd
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array($nome, $quantidade, $valor, $descricao));

        return view('adicionado')->with('nome', $nome);
    }*/
}