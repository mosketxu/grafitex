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
                "<tr id='a" + value.campStoId + "'>" + 
                    "<td>" + value.id + "</td>" + 
                    "<td>" + value.store_name + "</td>" + 
                    "<td  class='text-right'><a href='#' id='idAsoc' OnClick='Disponer(" + value.campStoId + "," + value.id + ");'><i class='text-danger fas fa-arrow-alt-circle-right fa-fw fa-lg'></i></a></td>" + 
                "</tr>"
            );
        });
    });
}

function Asociar(idSto) {
    var campaign = $("#campaignid").html();
    var token = $("#token").val();
    var route = "/campaign/asoc";

    $.ajax({
        url: route,
        headers: { "X-CSRF-TOKEN": token },
        type: "POST",
        dataType: "json",
        data: {campaignId: campaign , storeId: idSto },
        success: function(data) {
            console.log(data);
            $("#tablaAsociadas").prepend(
                "<tr id='a" + data.campaignstoreId + "'>"+
                    "<td class='text-success'>" + data.store.id + "</td>" + 
                    "<td class='text-success'>" + data.store.store_name + "</td>" + 
                    "<td  class='text-right'><a href='#' OnClick='Disponer(" + data.campaignstoreId + "," + data.store.id + ");'><i class='text-danger fas fa-arrow-alt-circle-right fa-fw fa-lg'></i></a></td>" +
                "</tr>"
            );
            var idn = "#d" + idSto;
            $(idn).remove();
        },
        error: function(msj) {
            // alert(msj.responseJSON.errors.empresaId);
            // console.log($errors);
        }
    });
}

function Disponer(campaignstoreId,storeId) {
    var campaign = $("#campaignid").html();
    var token = $("#token2").val();
    var route = "/campaign/disp";

    $.ajax({
        url: route,
        headers: { "X-CSRF-TOKEN": token },
        type: "delete",
        dataType: "json",
        data: { campstoId:campaignstoreId, stoId: storeId, campId: campaign },
        success: function(data) {
            $("#tablaDisponibles").prepend(
                "<tr id='d" + storeId + "'>" +
                    "<td  class='text-left'><a href='#'  OnClick='Asociar(" + storeId + ");'><i class='text-success fas fa-arrow-alt-circle-left fa-fw fa-lg'></i></a></td>" +
                    "<td>"+ storeId + "</td>"+
                    "<td>"+ data.storename + "</td>"+
                "</tr>"
            );
            var idn = "#a" + campaignstoreId;

            $(idn).remove();
        },
        error: function() {
            // alert(
            //     "Ha habido un error. Inténtelo de nuevo y si persiste comuníquelo al administrador."
            // );
            // console.log(data);
        }
    });
}
