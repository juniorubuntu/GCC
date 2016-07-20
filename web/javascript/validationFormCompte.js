function validationTitulaireCompte() {

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

function validationLoginCompte() {

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

function validationPassWordCompte() {

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


function validationCompte() {
    return ((validationLoginCompte(
            +validationPassWordCompte())
            + validationTitulaireCompte()) === 3) ? 1 : 0;
}