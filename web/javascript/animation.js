function expanNode(id) {
    if ($('.pere_' + id + '').hasClass('expd')) {
        $('.pere_' + id + '').hide("slow");
        $('.pere_' + id + '').removeClass('expd');
        changeGyphicon(0, id);
    } else {
        $('.pere_' + id + '').show("slow");
        $('.pere_' + id + '').addClass('expd');
        changeGyphicon(1, id);
    }
}


function changeGyphicon(test, num) {
    if (test) {
        $('.list_' + num + '').removeClass('glyphicon-plus-sign');
        $('.list_' + num + '').addClass('glyphicon-minus-sign');
    } else {
        $('.list_' + num + '').addClass('glyphicon-plus-sign');
        $('.list_' + num + '').removeClass('glyphicon-minus-sign');
    }
}

function afficheDate() {
    $('.date-choose').removeClass("hide");
    $('.date-choose-aff').hide();
}

function cacheDate() {
    $('.date-choose-aff').show();
    document.getElementsByClassName('date-choose-aff')[0].value = document.getElementsByClassName('date-choose')[0].value;
    $('.date-choose').addClass("hide");
}

function afficheMenu() {
    if ($('.compte').hasClass('ok')) {
        $('.compte').removeClass('ok');
        $('.compte').hide("slow");
    } else {
        $('.compte').show("slow");
        $('.compte').addClass('ok');
    }
}

function detacheBranche(fils) {
    $("#myModal").modal('show');
    document.getElementById('fils').value = fils;
}

function expanNodeBranche(id) {
    if ($('.pereB_' + id + '').hasClass('expd')) {
        $('.pereB_' + id + '').hide("slow");
        $('.pereB_' + id + '').removeClass('expd');
        changeGyphicon(0, id);
    } else {
        $('.pereB_' + id + '').show("slow");
        $('.pereB_' + id + '').addClass('expd');
        changeGyphicon(1, id);
    }
}

function changeBranche(nom, id, pereId) {
    var newLinkText = document.createTextNode('Nouvelle Branche: ' + nom);
    var newbranch = document.getElementById('newBranch');
    newbranch.replaceChild(newLinkText, newbranch.firstChild);
    document.getElementById('pere').value = id;
}


function alertDelete(sousDir) {
    $("#deleteModal").modal('show');

    var newLinkText = document.createTextNode(sousDir);
    var newbranch = document.getElementById('toDelete');
    newbranch.replaceChild(newLinkText, newbranch.firstChild);
}

function alertDeletePoste(poste) {
    $("#deletePosteModal").modal('show');

    var newLinkText = document.createTextNode(poste);
    var newbranch = document.getElementById('posteToDelete');
    newbranch.replaceChild(newLinkText, newbranch.firstChild);
}