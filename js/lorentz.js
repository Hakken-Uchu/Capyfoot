$(document).on("click", "#calculer", function () {
    calculPi();
})


function calculPi() {
    if (!$("#homme").prop("checked") && !$("#femme").prop("checked")) {
        alert("Veuillez renseignez les champs homme ou femme");
        return;
    }
    var taille = $("#taille").val();
    taille = parseInt(taille);
    var Pi = lorentz(taille, $("#homme").prop("checked"));
    $("#alertPi").removeClass("d-none").html("Votre poids idéal est de " + Pi);
}

function lorentz(size, genre) {
    var result = 0;
    var hommefemme = 0;
    if (genre == true) {
        var hommefemme = 4;
    }
    else {
        var hommefemme = 2.5;
    }
    result = size - 100 - ((size - 150) / hommefemme).toFixed(1);
    return result;
}