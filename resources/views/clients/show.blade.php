@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Exibindo cliente: {{$client->id}}</div>

                <div class="card-body">
                    
                    Aqui esta os dados do cliente {{$client->name}}.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection