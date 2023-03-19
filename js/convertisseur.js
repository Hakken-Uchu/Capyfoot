$(document).on("click", "#calculer", function () {
    jsp();
})
function jsp() {
    var valeurMonnaie1 = $("#monnaie1 option:selected").val();
    var valeurMonnaie2 = $("#monnaie2 option:selected").val();
    var berry = parseFloat($("#transformable").val());
$("#result").removeClass("alert-success alert-danger")
    if ($("#transformable").val() == "") {
        $("#result").removeClass("d-none").addClass("alert-danger").html("Veuillez rentrer une valeur");
        return
    }
    if (valeurMonnaie1 == "vide" || valeurMonnaie2 == "vide") {
        $("#result").removeClass("d-none").addClass("alert-danger").html("Veuillez renseignez la/les monnaies que vous souahiter utilisées");
        return;
    }
    else if (valeurMonnaie1 !== "vide") {
        var result = choixconversion2(valeurMonnaie1, valeurMonnaie2, berry).toFixed(2);
        $("#result").removeClass("d-none").addClass("alert-success").html(result);

    }
}

function choixconversion2(devise1, devise2, monnaie) {
    var sens = true;
    if (devise1 == devise2) {
        return monnaie;
    }
    for (let i = 0; i < 2; i++) {
        var devisetodevise = devise1 + "-" + devise2;
        if (!sens) {
            devisetodevise = devise2 + "-" + devise1;
        }

        switch (devisetodevise) {
            case "euro-americain":
                return (sens ? monnaie * 1.08 : monnaie / 1.08);
                break;
            case "euro-yen":
                return (sens ? monnaie * 136.6 : monnaie / 136.6);
                break;
            case "euro-livre":
                return (sens ? monnaie * 0.83 : monnaie / 0.83);
                break;
            case "euro-australien":
                return (sens ? monnaie * 1.46 : monnaie / 1.46);
            case "americain-yen":
                return (sens ? monnaie * 126.48 : monnaie / 126.48);
                break;
            case "americain-livre":
                return (sens ? monnaie * 0.77 : monnaie / 0.77);
                break;
            case "americain-australien":
                return (sens ? monnaie * 1.35 : monnaie / 1.35)
                break;
            case "yen-livre":
                return (sens ? monnaie * 0.0061 : monnaie / 0.0061)
                break;
            case "yen-australien":
                return (sens ? monnaie * 0.011 : monnaie / 0.011)
                break;
            case "livre-australien":
                return (sens ? monnaie * 1.76 : monnaie / 1.76)
        }

        sens = !sens;

    }

}

// function choixconversion1() {
//     var valeurMonnaie1 = $("#monnaie1 option:selected").val();
//     var valeurMonnaie2 = $("#monnaie2 option:selected").val();
//     var j = parseFloat($("#transformable").val());
//     return choixconversion2(valeurMonnaie1, valeurMonnaie2, j);
//     if (valeurMonnaie1 == "euro1") {
//         if (valeurMonnaie2 == "euro2") {
//             return j;
//         }
//         if (valeurMonnaie2 == "americain2") {
//             return j * 1.09;

//         }
//         if (valeurMonnaie2 == "yen2") {
//             return choixconversion2("euro-yen", j, true);
//         }
//         if (valeurMonnaie2 == "livre2") {

//             return j * 0.83

//         }
//         if (valeurMonnaie2 == "asutralien2") {
//             return j * 1.47

//         }

//     }

//     else if (valeurMonnaie1 == "americain1") {
//         if (valeurMonnaie2 == "euro2") {
//             return j * 0.92;
//         }
//         if (valeurMonnaie2 == "americain2") {
//             return j;

//         }
//         if (valeurMonnaie2 == "yen2") {
//             return j * 125.34
//         }
//         if (valeurMonnaie2 == "livre2") {

//             return j * 0.76

//         }
//         if (valeurMonnaie2 == "asutralien2") {
//             return j * 1.34

//         }

//     }

//     else if (valeurMonnaie1 == "yen1") {
//         if (valeurMonnaie2 == "euro2") {

//             return j * 0.0073
//         }
//         if (valeurMonnaie2 == "americain2") {

//             return j * 0.0080
//         }
//         if (valeurMonnaie2 == "yen2") {

//             return j
//         }
//         if (valeurMonnaie2 == "livre2") {

//             return j * 0.0061
//         }
//         if (valeurMonnaie2 == "australien2") {

//             return j * 0.011

//         }

//     }
//     else if (valeurMonnaie1 == "livre1") {
//         if (valeurMonnaie2 == "euro2") {

//             return j * 1.20
//         }
//         if (valeurMonnaie2 == "americain2") {

//             return j * 1.31
//         }
//         if (valeurMonnaie2 == "yen2") {

//             return j * 164.68
//         }
//         if (valeurMonnaie2 == "livre2") {

//             return j
//         }
//         if (valeurMonnaie2 == "australien2") {

//             return j * 1.76

//         }

//     }

//     else if (valeurMonnaie1 == "australien1") {
//         if (valeurMonnaie2 == "euro2") {

//             return j * 0.68
//         }
//         if (valeurMonnaie2 == "americain2") {

//             return j * 0.74
//         }
//         if (valeurMonnaie2 == "yen2") {

//             return j * 93.36
//         }
//         if (valeurMonnaie2 == "livre2") {

//             return j * 0.57
//         }
//         if (valeurMonnaie2 == "australien2") {

//             return j

//         }

//     }












// }

