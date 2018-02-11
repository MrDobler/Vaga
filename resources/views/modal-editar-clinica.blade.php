<!-- Modal -->
<div class="modal fade" id="modalEditarClinica-{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form id="update-clinica-{{$c->id}}">
                    <h1>Atualizar Clínica</h1>
                    <div class="form-group">
                        <label>CNPJ</label>
                        <input type="text" id="cnpj-{{$c->id}}" class="form-control" name="cnpj">
                    </div>
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" id="nome-{{$c->id}}" name="nome">
                    </div>
                    <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button class="btn btn-primary" type="button" onclick="updateClinica({{$c->id}})">Editar</button>
                    </div>
                </form>
            </div>
        </div>    
    </div>
</div>