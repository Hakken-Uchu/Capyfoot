$(document).on("click", "#calculer", function () {
    recup();
})

function recup() {
    var metre = $("#metre").val();
    var feet = $("#feet").val();
    $("#erreur").removeClass("d-none");
    if (metre == "" && feet == "") {
        $("#erreur").addClass("alert-danger").html("Veuillez rentrer une valeur maximum");
        return
    }
    if (metre !== "" && feet !== "") {
        $("#erreur").addClass("alert-danger").html("Veuillez rentrer qu'une valeur maximum");
        return
    }
    if (metre == "") {
        $("#metre").val(calculmetre(metre, feet).toFixed(2));

    }
    if (feet == "") {
        $("#feet").val(calculfeet(metre, feet).toFixed(2));

    }
}

function calculmetre(metre, feet) {
    return feet * 0.30479442
}
function calculfeet(metre, feet) {
    return metre * 3.2809
}