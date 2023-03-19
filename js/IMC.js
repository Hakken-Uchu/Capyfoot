$(document).on("click", "#calculer", function () {
    calculImc();
})

function calculImc() {
    var poids = $("#poids").val();
    poids = parseInt(poids);
    var taille = $("#taille").val();
    taille = parseInt(taille);
    var IMC = calculImc2(poids, taille);
    var phrase = "";

    $("#alertImc").removeClass().addClass("alert mt-3 text-center");
    var homme = $("#homme");
    var femme = $("#femme");
    $(".classement").removeClass("border bg-secondary");
    if (homme.prop("checked")) {

        if (IMC < 18.5) {
            $("#alertImc").addClass("alert-danger");
            $("#maigreurh").addClass("border bg-secondary");
            phrase = $("#maigreurh").html();
        }
        else if (IMC > 18.5 && IMC < 27.2) {
            $("#alertImc").addClass("alert-success");
            $("#normaleh").addClass("border bg-secondary");
            phrase = $("#normaleh").html();
        }
        else if (IMC > 27.21 && IMC < 30) {
            $("#alertImc").addClass("alert-warning");
            $("#surpoidsh").addClass("border bg-secondary");
            phrase = $("#surpoidsh").html();
        }
        else if (IMC > 30 && IMC < 35) {
            $("#alertImc").addClass("alert-danger");
            $("#modereh").addClass("border bg-secondary");
            phrase = $("#modereh").html();
        }
        else if (IMC > 35 && IMC < 40) {
            $("#alertImc").addClass("alert-danger");
            $("#severeh").addClass("border bg-secondary");
            phrase = $("#severeh").html();
        }
        else if (IMC > 40) {
            $("#alertImc").addClass("alert-danger");
            $("#morbideh").addClass("border bg-secondary");
            phrase = $("#morbideh").html();
        }
    }

    if (femme.prop("checked")) {
        if (IMC < 18.5) {
            $("#alertImc").addClass("alert-danger");
            $("#maigreurf").addClass("border bg-secondary");
            phrase = $("#maigreurf").html();
        }
        else if (IMC > 18.5 && IMC < 25) {
            $("#alertImc").addClass("alert-success");
            $("#normalef").addClass("border bg-secondary");
            phrase = $("#normalef").html();
        }
        else if (IMC > 25 && IMC < 30) {
            $("#alertImc").addClass("alert-warning");
            $("#surpoidsf").addClass("border bg-secondary");
            phrase = $("#surpoidsf").html();
        }
        else if (IMC > 30 && IMC < 35) {
            $("#alertImc").addClass("alert-danger");
            $("#moderef").addClass("border bg-secondary");
            phrase = $("#moderef").html();
        }
        else if (IMC > 35 && IMC < 40) {
            $("#alertImc").addClass("alert-danger");
            $("#severef").addClass("border bg-secondary");
            phrase = $("#severef").html();
        }
        else if (IMC > 40) {
            $("#alertImc").addClass("alert-danger");
            $("#morbidef").addClass("border bg-secondary");
            phrase = $("#morbidef").html();
        }
    }
    if (!homme.prop("checked") && !femme.prop("checked")) {
        alert("Veuillez renseignez les champs homme ou femme");
        return;
    }
    
    $("#alertImc").html("Votre IMC est de " +  IMC  +  " (" + phrase + ")");
}


function calculImc2(poids, taille) {
    return (poids / ((taille ** 2) / 10000)).toFixed(2);
}

var etat = true;
$(document).on("click", "#contraste", function () {
    if (etat) {
        $("body").removeClass();
        $(".color-text").removeClass("text-white");
    }
    else {
        $("body").addClass("bg-dark");
        $(".color-text").addClass("text-white");
    }
    etat = !etat;
})


