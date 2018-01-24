<form  id="create-plano-clinica" method="POST">
    <h4>Adicionar Plano de Saúde na Clínica</h4>
    <div class="form-group">
        <label>Nome do Plano</label>
        <select name="plano_id">
        @foreach ($planos as $p)
            <option value="{{$p->id}}">{{$p->nome}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Nome da Clínica</label>
        <select name="clinica_id">
        @foreach ($clinicas as $c)
            <option value="{{$c->id}}">{{$c->nome}}</option>
        @endforeach
        </select>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" onclick="createPlanoClinica()" type="button">Cadastrar</button>
    </div>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errors)
            <li>{{$errors}}</li>
            @endforeach 
        </ul>
    </div>
    @endif  
</form>
