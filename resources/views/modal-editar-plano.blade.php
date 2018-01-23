<!-- Modal -->
<div class="modal fade" id="modalEditarPlano" tabindex="-1" role="dialog" aria-labelledby="modaEditarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <form  id="update-plano" action="updatePlano/{{$p->id}}" method="PUT">
                <h1>Atualizar Plano de Saúde</h1>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{$p->nome}}">
                </div>
                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" class="form-control" name="logo" value="{{$p->logo}}">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status" value="{{$p->status}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button class="btn btn-primary" onclick="updatePlano('{{$p->id}}')" type="button">Editar</button>
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