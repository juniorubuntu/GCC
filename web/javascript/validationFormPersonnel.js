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

function validationTelPersonnel() {

    var status = 0;
    var telP = document.getElementById('telP');
    var telPV = document.getElementById('telP').value;
    if (telPV.length === 0) {
        $('.telCP').addClass('has-error');
        $('.telCP').addClass('has-feedback');
        $('.tel').removeClass('hide');
    } else {
        telP.value = telPV;
        status = status + 1;
    }
    return status;
}

function validationEmailPersonnel() {

    var status = 0;
    var emailP = document.getElementById('emailP');
    var emailPV = document.getElementById('emailP').value;
    if (emailPV.length === 0) {
        $('.emailCP').addClass('has-error');
        $('.emailCP').addClass('has-feedback');
        $('.email').removeClass('hide');
    } else {
        emailP.value = emailPV;
        status = status + 1;
    }
    return status;
}

function validationDatePersonnel() {

    var status = 0;
    var dateP = document.getElementById('dateP');
    var datePV = document.getElementById('dateP').value;
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


function validationDecisionPersonnel() {

    var status = 0;
    var deciP = document.getElementById('deciP');
    var deciPV = document.getElementById('deciP').value;
    if (deciPV.length === 0) {
        $('.deciCP').addClass('has-error');
        $('.deciCP').addClass('has-feedback');
        $('.deci').removeClass('hide');
    } else {
        deciP.value = deciPV;
        status = status + 1;
    }
    return status;
}

function validationFormPersonnel() {
    return ((
            validationNomPersonnel()
            + validationPrenomPersonnel()
            + validationMatriculePersonnel()
            + validationTelPersonnel()
            + validationEmailPersonnel()
            + validationDatePersonnel()
            + validationDecisionPersonnel()
            ) === 7) ? 1 : 0;
}

function editerFocus(classe, num) {
    $('.' + classe + '').removeClass('has-error');
    $('.' + classe + '').removeClass('has-feedback');
    $('.' + num + '').addClass('hide');
}