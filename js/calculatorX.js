var result = "data-value";
var stocknombre = [];
var stocksigne = [];
var stockresult = [];
var tempnumber = "";




$(document).ready(function () {
})
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
    switch (operateur) {
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

function transformssj1(signetemp) {
    switch (signetemp) {
        case "plus":
            return "+";
            break;
        case "moins":
            return "-";
            break;
        case "multiplication":
            return "*";
            break;
        case "division":
            return "/";
            break;
    }
}


$(".btn").click(function () {
    var input = "";
    switch ($(this).attr("data-value")) {
        case "0":
        case "1":
        case "2":
        case "3":
        case "4":
        case "5":
        case "6":
        case "7":
        case "8":
        case "9":
            input = $("#input2").val() + $(this).attr("data-value")
            tempnumber = tempnumber + $(this).attr("data-value");
            break;
        case "delete":
            nettoiepresquetout();
            $("#input2").val("");
            break;
        case "multiplication":
        case "division":
        case "plus":
        case "moins":
            input = $("#input2").val() + transformssj1($(this).attr("data-value"));
            stocksigne.push($(this).attr("data-value"));
            stocknombre.push(tempnumber);

            tempnumber = "";
            break;
    }
    $("#input2").val(input);
    switch ($(this).attr("data-value")) {

        case "egal":
            stocknombre.push(tempnumber);
            tempnumber = "";
            tempboucle = null
            var ssj2 = stocknombre.length;
            for (let i = 0; i < ssj2; i++) {
                if (i == 0) {
                    tempboucle = stocknombre[i]
                    continue;
                }
                tempboucle = calcultout(parseFloat(tempboucle), parseFloat(stocknombre[i]), stocksigne[i - 1])
            }
            $("#input2").val(tempboucle);

            nettoiepresquetout();


            break;
    }
})
function nettoiepresquetout() {
    stocknombre = [];
    stocksigne = [];
    stockresult = [];
}









