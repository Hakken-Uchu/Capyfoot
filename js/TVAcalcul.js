$(document).on("click", "#calculer", function () {
    recup();
})

function recup() {
    var tva = $("#tva option:selected").val();
    var valeur = parseFloat($("#valeur").val());
    $("#result").removeClass("alert-black");
    if (valeur == "") {
        $("#result").addClass("alert-danger").html("Veuillez rentrer une valeur");
        return
    }

    if (tva == "vide") {
        $("#result").addClass("alert-danger").html("Veuillez renseignez le type de TVA que vous souhaiter");
        return
    }
    else if (valeur !== "") {
        var result = calcul(valeur, tva).toFixed(2);
        $("#result").removeClass("d-none alert-danger").addClass("alert-success").html(result + "€");

    }

}



function calcul(valeur, tva) {
        if (tva == "normal") {
            return valeur + (valeur * 0.20);

        }
        if (tva == "intermediaire") {
            return valeur + (valeur * 0.10);

        }
        if (tva == "reduit") {
            return valeur + (valeur * 0.055);

        }
        else if (tva == "particulier") {
            return valeur + (valeur * 0.021);
        }
    }


