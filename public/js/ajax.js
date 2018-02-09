//Funções do Plano

function getPlano(id) {
    fetch('/getPlano/' + id)
        .then((response) => {
           response.json().then((data) => {
                document.querySelector(`#nome-${id}`).value = data.nome;
                document.querySelector(`#status-${id}`).value = data.status;
            });
        }) 
        .catch(() => alert('Erro'));
}

function deletePlano(id) {
    let init = {
        method: 'delete'
    };
    fetch('/deletePlano/' + id, init)
        .then(() => window.location.reload())
        .catch(() => alert('Erro'));
}

function createPlano() {
    let values = document.querySelector('#create-plano');
    let form = new FormData(values);
    fetch('/createPlano', {
        method: 'post',
        body: form
    })
        .then(() => window.location.reload())
        .catch(() => alert('Erro'));
}

function updatePlano(id) {
    let values = document.getElementById(`update-plano-${id}`);
    let form = new FormData(values);
    let header = new Headers();
    header.append('Content-Type', 'application/x-www-form-urlencoded');
    fetch(`/updatePlano/${id}`, {
        method: 'put',
        headers: header,
        body: form,
    })
        .then(res => console.log(res))
        .catch(() => alert('Erro'));
}

//Funções da Clínica

function createClinica() {
    let values = document.querySelector('#create-clinica');
    let form = new FormData(values);
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


//Funções de Relacionamento Clinica x Plano
function createPlanoClinica() {
    let values = document.querySelector('#create-plano-clinica');
    let planoId = values.plano_id.value;
    let clinicaId = values.clinica_id.value;
    let form = new FormData(values);
    fetch(`/createPlanosEmClinicas/plano/${planoId}/clinica/${clinicaId}`, {
        method: 'post',
        body: form
    })
        .then(() => window.location.reload())
        .catch(() => alert('Erro'));
}

$('#modalEditarPlano').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget);
    let recipient = button.data('id');
    let modal = $(this);
    modal.find('#status').val(recipient);
});
