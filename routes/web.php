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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

//rotas que ficarão disponivel apenas apos a autenticação.
Route::group(['middleware' => 'auth'], function () {
    /*
        Métodos "index", devem retornar sempre uma lista de dados
        EX: ClientsController@index, deve retornar uma lista com os clientes cadastrados no sistema.

        Métodos "create", devem retorar sempre a tela para cadastro
        EX: ClientsController@create, deve retornar a tela de cadastro de clientes.

        Metodo "store", utilizado para realizar a gravação dos dados digitados em tela no banco (commit).
        EX: ClientsController@store, realiza a gravação do cliente no banco.

        Método "show", realiza a abertura de visualização do cadastro especifico, apos consulta no banco.
        EX: ClientsController@show, passando parametro id do cliente pela rota ( /clientes/show/{client_id} )

        Método "edit", retorna a tela com um cadastro especifico para alteração dos dados.
        EX: ClientsController@edit, passando o parametro id no metodo de edição pela rota: ( /clientes/edit/{client_id} )

        Método "update", realiza a gravação do metodo edit no banco.
        EX: ClientsController@update, passando o parametro id no metodo de update pela rota: ( /clients/update/{client_id} )

        Método "destroy", realiza a deleção de um item no banco.
        EX: ClientsController@destroy, passando o parametro id no metodo de deleção pela rota: ( /clients/destroy/{client_id})

    */
    //dashboard
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    
    //Cadastro de Chamados
    Route::get('/calleds', 'CalledsController@index')->name('calleds');

    //Cadastro de usuários do portal 
    Route::get('/users', 'UsersController@index')->name('users');

    //Cadastro de Clientes
    Route::get('/clients', 'ClientsController@index')->name('clients');
    Route::get('/clients/create', 'ClientsController@create')->name('clients.create');
    Route::post('/clients/store', 'ClientsController@store')->name('clients.store');
    Route::get('/clients/show/{id}', 'ClientsController@show')->name('clients.show');
    Route::get('/clients/edit/{id}', 'ClientsController@edit')->name('clients.edit');
    Route::post('/clients/update/{id}', 'ClientsController@update')->name('clients.update');
    Route::get('/clients/destroy/{id}', 'ClientsController@destroy')->name('clients.destroy');

    //Cadastro de Ocorrencia
    Route::get('/incidents', 'IncidentController@index')->name('incidents');

    //Cadadstro de Produtos
    Route::get('/products', 'ProductsController@index')->name('products');

    //Base instalada
    Route::get('/servicebases', 'ServicebasesController@index')->name('servicebases');

    //produtos da base instalada
    Route::get('/productbases', 'ProductbasesController@index')->name('productbases');

    //Cadastro de habilidades
    Route::get('/skills', 'SkillsController@index')->name('skills');

    //Cadastro de tecnicos
    Route::get('/technicals', 'TechnicalController@index')->name('technicals');
});
