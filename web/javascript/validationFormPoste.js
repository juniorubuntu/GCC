function validationNomPersonnel() {

    var status = 0;
    var nomP = document.getElementById('nomP');
    var nomPV = document.getElementById('nomP').value;
    if (nomPV.length === 0) {
        $('.nomCP').addClass('has-error');
        $('.nomCP').addClass('has-feedback');
        $('.nom').removeClass('hide');
    } else {
        nomP.value = nomPV;
        status = status + 1;
    }
    return status;
}

function validationPrenomPersonnel() {

    var status = 0;
    var prenP = document.getElementById('prenP');
    var prenPV = document.getElementById('prenP').value;
    if (prenPV.length === 0) {
        $('.preCP').addClass('has-error');
        $('.preCP').addClass('has-feedback');
        $('.pren').removeClass('hide');
    } else {
        prenP.value = prenPV;
        status = status + 1;
    }
    return status;
}

function validationMatriculePersonnel() {

    var status = 0;
    var matP = document.getElementById('matP');
    var matPV = document.getElementById('matP').value;
    if (matPV.length === 0) {
        $('.matCP').addClass('has-error');
        $('.matCP').addClass('has-feedback');
        $('.mat').removeClass('hide');
    } else {
        matP.value = matPV;
        status = status + 1;
    }
    return status;
}

function validationFormPoste() {
    return ((
            validationNomPersonnel()
            + validationPrenomPersonnel()
            + validationMatriculePersonnel()
            ) === 3) ? 1 : 0;
}


function change_valeur(){
    select = document.getElementById('prenP');
    choice = select.selectedIndex;
    valeur_cherchee = select.options[choice].value;
}