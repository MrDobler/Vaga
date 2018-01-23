<table class='table' id='tabela'>
    <thead class='thead-dark'>
        <tr>
            <th>CNPJ</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clinicas as $c)
        <tr>    
            <td>{{ $c->cnpj }}</td>
            <td>{{ $c->nome }}</td>
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