function validationNomBranche() {

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

function validationDateBranche() {

    var status = 0;
    var dateP = document.getElementById('dateB');
    var datePV = document.getElementById('dateB').value;
    if (datePV.length === 0) {
        $('.dateCP').addClass('has-error');
        $('.dateCP').addClass('has-feedback');
        $('.date').removeClass('hide');
    } else {
        dateP.value = datePV;
        status = status + 1;
    }
    return status;
}

function validationBranche() {
    return ((validationDateBranche()
            + validationNomBranche()
            ) === 2) ? 1 : 0;
}

function test(){
    document.getElementById('nomP').focus();
}