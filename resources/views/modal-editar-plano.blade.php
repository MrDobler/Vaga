<!-- Modal -->
<div class="modal fade" onshow="getPlano()" id="modalEditarPlano" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <form  id="update-plano" action="updatePlano/" method="PUT">
                <h1>Atualizar Plano de Saúde</h1>
                <span id="idHolder"></span>	
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" value="">
                </div>
                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" class="form-control" name="logo" value="">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" id='status' name="status">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button class="btn btn-primary" type="button">Editar</button>
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
            </div>
        </div>    
    </div>
</div>