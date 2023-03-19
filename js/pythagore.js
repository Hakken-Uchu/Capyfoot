$(document).on("click", "#calculer", function () {
    recup();
})

function recup() {
    var valeurA = $("#valeurA").val();
    var valeurB = $("#valeurB").val();
    $("#result").removeClass("alert-light");
    if (valeurA == "" && valeurB == "") {
        $("#result").addClass("alert-danger").html("Veuillez rentrer deux valeurs");
        return
    }
    if (valeurB == "") {
        $("#result").addClass("alert-danger").html("Veuillez rentrer la valeur B");
        return
    }
    if (valeurA == "") {
        $("#result").addClass("alert-danger").html("Veuillez rentrer la valeur A");
        return
    }
    else {
        var result = ""
        result = ((valeurA * 2) + (valeurB * 2))
        $("#result").addClass("alert-success").html("C² = " + result + "cm");
    }
}