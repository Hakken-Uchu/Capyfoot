$(document).ready(function () {
    setInterval(function () {
        var date = new Date();

        var heures = ('0' + date.getHours().toString()).slice(-2);
        var minutes =('0' + date.getMinutes().toString()).slice(-2);
        var secondes =('0' + date.getSeconds().toString()).slice(-2);
        $("#time > input").val( heures + ":" + minutes + ":" + secondes);
        if(heures == minutes && minutes == secondes){
    
            alert("Tu est très courageux mon ami GG");

        }
    }, 999);

})