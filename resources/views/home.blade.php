@extends('layouts.app')

@section('content')
@include('modal-editar-plano')    
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default tamanho">
                <div class="panel-heading">Adicionar Plano</div>
                <div class="panel-body">
                    @include('cadastro-plano-em-clinica')
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
                            <h1>Listagem de Planos de Saúde na Clínica</h1>
                        </div>
                    </div>
                    </div>
                    <table class='table' id='tabela'>
                        <thead class='thead-dark'>
                            <tr>
                                <th>Nome</th>
                                <th>Logo</th>
                                <th>Status</th>
                                <th>Editar</th>
                                <th>Remover</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($planos as $p)
                            <tr>
                                <td>{{ $p->nome }}</td>
                                @php{{ $src = }} @endphp
                                <td><img src="{{'data: image/jpg;charset=utf-8;base64,'.$p->logo}}"></td>
                                <td>
                                    @if ($p->status === 1) 
                                        {{'ATIVO'}}
                                    @else
                                        {{'INATIVO'}}
                                    @endif
                                </td>
                                <td>
                                    <button id="btn-editar" class="btn btn-secondary" type="button" data-id="{{$p->id}}" data-toggle="modal" data-target="#modalEditarPlano">Editar</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" onclick="deletePlano('{{$p->id}}')">Remover</button>
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
