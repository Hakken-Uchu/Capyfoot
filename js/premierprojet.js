$(document).on("click", "#plus", function () {
    executeCalcul("plus");
})
$(document).on("click", "#moins", function () {
    executeCalcul("moins");
}) 

$(document).on("click", "#multiplication", function () {
    executeCalcul("multiplication");
})

$(document).on("click", "#division", function () {
    executeCalcul("division");

})

function executeCalcul(operateur){
    var input1 = $("#input1").val();
    input1 = parseFloat(input1);
    var input2 = $("#input2").val();
    input2 = parseFloat(input2);
    var result = calcultout(input1, input2, operateur);
    $("#result").val(result);
}

function plus(data1, data2) {
    return data1 + data2;
}
function moins(data1, data2) {
    return data1 - data2;

}
function multiplication(data1, data2) {
    return data1 * data2;
}
function division(data1, data2) {
    return data1 / data2;

}

function calcultout(data1, data2, operateur) {
    var result = 0;

    switch(operateur){
        case "plus":
             result = plus(data1, data2);
        break;
        case "moins":
            result = moins(data1, data2);
        break;
        case "multiplication":
            result = multiplication(data1, data2);
        break;
        case "division":
            result = division(data1, data2);
        break;
    }
    return result;
}