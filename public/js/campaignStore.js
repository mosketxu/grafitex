$(document).ready(function() {
    CargarDisp();
    CargarAsoc();
});

function CargarDisp() {
    var stoDisp = $("#tStoDisp");
    var campaign=$("#campaignid").html();
    var route = "/campaign/stoDisp/" + campaign;

    $.get(route, function(res) {
        console.log(res);
        $(res).each(function(key, value) {
            stoDisp.append(
                "<tr id='d" +
                    value.id +
                    "'><td class='text-left'><a href='#'  OnClick='Asociar(" +
                    value.id +
                    ");'><i class='text-success fas fa-arrow-alt-circle-left fa-lg'></i></a></td><td>" +
                    value.id +
                    "</td><td>" + 
                    value.store_name +
                    "</td></tr>"
            );
        });
    });
}

function CargarAsoc() {
    var stoAsoc = $("#tStoAsoc");
    var campaign=$("#campaignid").html();
    var route = "/campaign/stoAsoc/" + campaign;

    $.get(route, function(res) {
        // console.log(res);
        $(res).each(function(key, value) {
            stoAsoc.append(
                "<tr id='a" + value.id + "'>" + 
                    "<td>" + value.id + "</td>" + 
                    "<td>" + value.store_id + "</td>" + 
                    "<td  class='text-right'><a href='#' id='idAsoc' OnClick='Disponer(" + value.id + "," + value.store_name + ");'><i class='text-danger fas fa-arrow-alt-circle-right fa-fw fa-lg'></i></a></td>" + 
                "</tr>"
            );
        });
    });
}