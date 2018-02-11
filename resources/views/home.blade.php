@extends('layouts.app')

@section('content')

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
                            <h3>Listagem de planos de saúde nas clínicas</h3>
                            <h5>Usuário: {{ Auth::user()->name }}</h5>
                        </div>
                    </div>
                    </div>
                    <table class='table' id='tabela'>
                        <thead class='thead-dark'>
                            <tr>
                                <th>Clínica</th>
                                <th>Plano</th>
                                <th>Remover</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($planos as $p)
                                @foreach ($p->clinicas as $c)
                                    @if ($c->user_id ==  Auth::user()->id)
                                    <tr>
                                        <td>{{ $c->nome  }}</td>
                                        
                                        <td>{{ $p->nome }}</td>
                                        <td>
                                            <button type="button" class="btn btn-danger" onclick="deletePlanoEmClinica({{$p->id}}, {{$c->id}})">Remover</button>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
