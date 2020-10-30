@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header p-4 text-center">
                    <h1>Lista de clientes</h1>
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Documento</th>
                                <th>Telefone</th>
                                <th>Blacklist</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $clients as $client)
                            <tr>
                                <td>{{$client->id}}</td>
                                <td>{{$client->name}}</td>
                                <td>{{$client->document}}</td>
                                <td>{{$client->phone}}</td>
                                <td>{{$client->blacklist ? 'Sim':'Não'}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{
                                        route('clients.show',[ 
                                            'id' => $client->id 
                                        ] )
                                }}">Ver</a>
                                <a class="btn btn-warning" href="{{
                                        route('clients.edit',[ 
                                            'id' => $client->id 
                                        ] )
                                }}">Editar</a>
                                <a class="btn btn-danger" href="{{
                                        route('clients.destroy',[ 
                                            'id' => $client->id 
                                        ] )
                                }}">Deletar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection