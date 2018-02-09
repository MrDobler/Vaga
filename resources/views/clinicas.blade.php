@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default tamanho">
                <div class="panel-heading">Adicionar Plano</div>
                <div class="panel-body">
                    @include('cadastro-clinica')
                </div>
            </div>
        </div>
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Listagem de Clínicas</h1>
                            </div>
                        </div>
                    </div>
                    <table class='table' id='tabela'>
                        <thead class='thead-dark'>
                            <tr>
                                <th>CNPJ</th>
                                <th>Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clinicas as $c)
                                @if ($c->user_id == Auth::user()->id)
                                    <tr>    
                                        <td>{{ $c->cnpj }}</td>
                                        <td>{{ $c->nome }}</td>
                                        <td>
                                            <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#modalEditarPlano">Editar</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger" onclick="deleteClinica('{{$c->id}}')">Remover</button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
