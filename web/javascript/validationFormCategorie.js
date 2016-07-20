function validationNomCategorie() {

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

function validationQuotaCategorie() {

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

function validationCategorie() {
    return ((validationNomCategorie()
            + validationQuotaCategorie()
            ) === 2) ? 1 : 0;
}