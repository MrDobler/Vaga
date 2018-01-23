<form action="createClinica" id="create-clinica" method="POST">
    <h4>Cadastrar Clinica</h4>
    <div class="form-group">
        <label>CNPJ</label>
        <input type="text" class="form-control" name="cnpj">
    </div>
    <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome">
    </div>
    <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
    <div class="modal-footer">
        <button id="cadastrar" class="btn btn-primary" onclick="createClinica()" type="button">Cadastrar</button>
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
