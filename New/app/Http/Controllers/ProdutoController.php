<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Produto;
use App\Http\Requests\ProdutoRequest;
use App\Categoria;

class ProdutoController extends Controller {
    public function __construct()
    {
        $this->middleware('autorizador');
    }

    public function lista()
    {
        $produtos = Produto::all();

        return view('listagem')->with('produtos', $produtos);
    }
    public function mostra($id)
    {
        //Resquest::route usado para receber um parametro da url
        //$id = Request::route('id');
        $produto = Produto::find($id);

        return view('detalhes')->with('p', $produto);
    }

    public function remove($id)
    {
        $id = Request::route('id');
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->action('ProdutoController@lista');
    }

    public function novo()
    {
        return view('formulario')->with('categorias', Categoria::all());
    }

    public function adiciona(ProdutoRequest $request)
    {
        
        //info formulario
        /*$produto->nome = Request::input('nome');
        $produto->quantidade = Request::input('quantidade');
        $produto->valor = Request::input('valor');
        $produto->descricao = Request::input('descricao');*/
        
        //salvar bd
        //DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array($nome, $quantidade, $valor, $descricao));

        //metodo 1
        /*$params = Request::all();
        $produto = new Produto($params);
        $produto->save();*/

/*        $validator = Validator::make(
            ['nome' => Request::input('nome')],
            ['nome' => 'required|min:3']
        );

        if($validator->fails())
        {
            $msg = $validator->messages();
            return redirect('produtos/novo');
        }*/



        //metodo 2
        // Produto::create(Request::all());

        //metodo 3
        Produto::create($request->all());

        return redirect('/produtos')->withInput();
    }
}