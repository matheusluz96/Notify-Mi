<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

//login
Route::get('/', 'LoginController@form');
Route::get('/notifymi', 'LoginController@form');
Route::get('/notifymi/login', 'LoginController@form');
Route::post('/notifymi/login', 'LoginController@login');
Route::get('/notifymi/cadastro', 'LoginController@cadastro');

//tecnico
Route::get('/notifymi/tecnicos/cadastro', 'TecnicoController@cadastro');
Route::post('/notifymi/tecnicos/adiciona', 'TecnicoController@adiciona');
Route::get('/notifymi/tecnicos/', 'TecnicoController@lista');
Route::get('/notifymi/tecnicos/informacao/{id}', 'TecnicoController@informacao');
Route::get('/notifymi/tecnicos/remove/{id}', 'TecnicoController@remove');

//cliente
Route::get('/notifymi/clientes/cadastro', 'ClienteController@cadastro');
Route::get('/notifymi/clientes/lista', 'ClienteController@lista');

//pedido
Route::get('/notifymi/pedidos/', 'PedidoController@lista');
Route::get('/notifymi/pedidos/cadastro', 'PedidoController@cadastro');

//gerente
Route::get('/notifymi/gerentes/cadastro', 'GerenteController@cadastro');
Route::get('/notifymi/gerentes/', 'GerenteController@lista');

//funcionario
Route::get('/notifymi/funcionarios/', 'FuncionarioController@lista');
Route::get('/notifymi/funcionarios/detalhes', 'FuncionarioController@detalhes');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
