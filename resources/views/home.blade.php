@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default tamanho">
                <div class="panel-heading">Adicionar Plano</div>
                <div class="panel-body">
                    @include('cadastro-plano')
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default tamanho">
                <p>              </p>
                <div class="panel-heading">Adicionar Clínica</div>
                <div class="panel-body">
                    @include('cadastro-clinica')
                </div>
                <p>              </p>            
                <br>
                <br>          
                <br>
            </div>
        </div>
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Listagem de Planos</h1>
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
                                @include('modal-editar-plano', $p)    
                                <td>{{ $p->nome }}</td>
                                <td><img src='data:image/jpg;base64; {{ base64_decode($p->logo) }}'></td>
                                <td>
                                    @if ($p->status === 1) 
                                        {{'ATIVO'}}
                                    @else
                                        {{'INATIVO'}}
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#modalEditarPlano">Editar</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" onclick="deletePlano('{{$p->id}}')">Remover</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-2">
                        <button type="button" id="btn-lista-clinicas" class="btn btn-primary">
                            Listar Clínicas
                        </button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary" onclick="getTabelaClinicas()">
                            Listar Planos
                        </button>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection