function deletePlano(id) {
    let init = {
        method: 'delete'
    };
    fetch('/deletePlano/' + id, init)
        .then(() => window.location.reload())
        .catch(() => alert('Erro'));
}

function createPlano() {
    var values = document.querySelector('#create-plano');
    var form = new FormData(values);
    fetch('/createPlano', {
        method: 'post',
        body: form
    })
        .then(() => window.location.reload())
        .catch(() => alert('Erro'));
}

function updatePlano(id) {
    var values = document.querySelector('#update-plano');
    var form = new FormData(values);
    fetch('/updatePlano/'+ id, {
        method: 'put',
        body: form
    })
        .then(() => window.location.reload())
        .catch(() => alert('Erro'));
}

function createClinica() {
    var values = document.querySelector('#create-clinica');
    var form = new FormData(values);
    fetch('/createClinica', {
        method: 'post',
        body: form
    })
        .then(() => window.location.reload())
        .catch(() => alert('Erro'));
}

function deleteClinica(id) {
    let init = {
        method: 'delete'
    };
    fetch('/deleteClinica/' + id, init)
        .then(() => window.location.reload())
        .catch(() => alert('Erro'));
}

function createPlanoClinica() {
    var values = document.querySelector('#create-plano-clinica');
    var form = new FormData(values);
    fetch('/createPlanosEmClinicas', {
        method: 'post',
        body: form
    })
        .then(() => window.location.reload())
        .catch(() => alert('Erro'));
}

$('#modalEditarPlano').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var recipient = button.data('id');
    var modal = $(this);
    modal.find('#status').val(recipient);
});

function getPlano() {
    let init = {
        method: 'get'
    };
    var id = document.querySelector('#status').value;
    fetch('/getPlano/' + id, init)
        .then((response) => {
           alert(response.json());
        }) 
        .catch(() => alert('Erro'));
}


function updatePlanoClinica() {

}