<form  id="create-plano" method="POST">
    <h4>Cadastrar Plano de Saúde</h4>
    <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome">
    </div>
    <div class="form-group">
        <label>Logo</label>
        <input type="file" class="form-control" name="logo">
    </div>
    <div class="form-group">
        <label>Status</label>
        <input type="text" class="form-control" name="status">
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" onclick="createPlano()" type="button">Cadastrar</button>
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
