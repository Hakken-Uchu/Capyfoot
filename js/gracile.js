$(document).on("click", "#calculer", function () {
    console.log("fkdsl,n")
    calculCreff();
})

function calculCreff() {
    if (!$("#mince").prop("checked")  && !$("#moyen").prop("checked") && !$("#large").prop("checked")) {
        alert("Veuillez renseignez les champs mince, moyen, large");
        return;
    }
    var corpulence = 3;
    if($("#mince").prop("checked")){
        corpulence = 1;
    }
    else if($("#moyen").prop("checked")){
        corpulence = 2;
    }

    var taille = $("#taille").val();
    taille = parseInt(taille);
    var age = $("#age").val();
    age = parseInt(age);
    var AHA = creff(taille,  age, corpulence);
    $("#alertCreff").removeClass("d-none").html("Votre poids idéal par rapport a la formule de monsieur Creff est de " + AHA);
}


function creff(size, age, corpulence) {
    var result = 0;
    if (corpulence == 1) {
        corpulence = 0.9 * 0.9
    }
    else if(corpulence == 2){
        corpulence = 0.9
    }
    else {
        corpulence = 0.9 * 1.1
    }
    result= (size - 100 + age / 10 ) * corpulence;
    return result.toFixed(1);
}