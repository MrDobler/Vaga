<!-- Modal -->
<div class="modal fade" id="modalEditarPlano-{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form id="update-plano-{{$p->id}}">
                    <h1>Atualizar Plano de Saúde</h1>
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" id="nome-{{$p->id}}" class="form-control" name="nome">
                    </div>
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" class="form-control" id="logo-{{$p->id}}" name="logo">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status-{{$p->id}}">
                            <option value="1">ATIVO</option>
                            <option value="0">INATIVO</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button class="btn btn-primary" type="button" onclick="updatePlano({{$p->id}})">Editar</button>
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