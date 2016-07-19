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
    $('.date-choose').addClass("hide");
}