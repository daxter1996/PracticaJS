/**
 * Created by jesus on 28/11/2016.
 */

var dia = new Date();
var mes = new Array ("Enero", "Febrero", "Marzo","Abril","Mayo", "Junio",
    "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

document.getElementById("dalt").innerHTML = dia.getFullYear();
document.getElementById("enmig").innerHTML = dia.getDate();
document.getElementById("baix").innerHTML = mes[dia.getMonth()];



function calculaIMC() {
    var altura = document.getElementById("altura").value;
    var pes = document.getElementById("pes").value;
    var imc = pes / (altura * altura);
    if(pes != 0 || altura != 0) {
        if (imc >= 0 && imc <= 16.00) {
            res = 'imc1';
        } else if (imc > 16.00 && imc <= 16.99) {
            res = 'imc2';
        } else if (imc >= 17.00 && imc <= 18.49) {
            res = 'imc3';
        } else if (imc > 18.49 && imc <= 24.99) {
            res = 'imc4';
        } else if (imc >= 25.00 && imc <= 29.99) {
            res = 'imc5';
        } else if (imc >= 30.00 && imc <= 34.99) {
            res = 'imc6';
        } else if (imc >= 35.00 && imc <= 40.00) {
            res = 'imc7';
        } else {
            res = 'imc8';
        }
    }else{
        alert("Dades Erroneas");
    }

    for(var i=1;i<8;i++){
        document.getElementById("imc"+i).classList.remove('blue-grey');
    }

    document.getElementById(res).classList.add('blue-grey');

}

function calculaFCM(sexe) {
    var fcm;
    var pes = document.getElementById("edat").value;
    if(pes != 0) {
        if (sexe == "dona") {
            var fcm = 214 - (0.8 * pes);
        } else {
            var fcm = 209 - (0.8 * pes);
        }
    }else {
        alert("Dades erroneas");
    }
    document.getElementById("resultatFCM").innerHTML = "Resultat: " + fcm;
}

function calculaCategoria() {
    var fecha = new Date();
    var year = fecha.getFullYear();
    var edat = year - document.getElementById("categoria").value;
    var categoria;
    if(edat >= 0) {
        if (edat >= 15 && edat <= 16) {
            categoria = "cat1";
        } else if (edat >= 17 && edat <= 18) {
            categoria = "cat2";
        } else if (edat >= 18 && edat <= 23) {
            categoria = "cat3";
        } else if (edat >= 23 && edat <= 30) {
            categoria = "cat4";
        } else if (edat >= 30) {
            categoria = "cat5";
        }
    }else{
        alert("Dades erroneas");
    }
    for(var i=1;i<6;i++){
        document.getElementById("cat"+i).classList.remove('blue-grey');
    }

    document.getElementById(categoria).classList.add('blue-grey');

}

function horari1(espaiHores, horaInici, horaFinal, ID){
    var horaAnterior = "";
    for(var i = horaInici;i<=horaFinal;i += espaiHores){
        document.getElementById(ID).innerHTML += "<tr><td>" + i + ":00 - " + horaAnterior + "</td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>" ;
        horaAnterior = i;
    }
}

function horari2(espaiHores, horaInici, horaFinal, ID){
    var horaAnterior = "";
    for(var i = horaInici;i<=horaFinal;i += espaiHores){
        document.getElementById(ID).innerHTML += "<tr><td>" + i + ":00 - " + horaAnterior + "</td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>" ;
        horaAnterior = i;
    }
}

function passwd(pass) {
    var caracters = (pass.length >= 8 && pass.length <= 16);
    var majuscola = false;
    var minuscola = false;
    var nombre = false;
    var caractersEspecials = new Array("-","_","@","#","$","%","&");
    var especials = false;
    for(var i=0;i < pass.length;i++){
       if(pass.charAt(i) == pass.toUpperCase().charAt(i)){
            majuscola = true;
            break;
        }
    }
    for(var i=0;i < pass.length;i++){
        if(pass.charAt(i) == pass.toLowerCase().charAt(i)){
            minuscola = true;
            break;
        }
    }
    for(var i=0;i < pass.length;i++){
        if(pass.charAt(i) >= 0 && pass.charAt(i) <= 9){
            nombre = true;
            break;
        }
    }
    for(var i=0;i < pass.length;i++){
        for(var j=0;j < caractersEspecials.length;j++){
            if(pass.charAt(i) == caractersEspecials[j]){
                especials = true;
                break;
            }
        }
    }

    document.getElementById("resultatPass").innerHTML = "Longitut entre 8 i 16 caracters: " + caracters;
    document.getElementById("resultatPass").innerHTML += "<br/>Conte minuscoles: " + minuscola;
    document.getElementById("resultatPass").innerHTML += "<br/>Conte majuscoles: " + majuscola;
    document.getElementById("resultatPass").innerHTML += "<br/>Conte nombres: " + nombre;
    document.getElementById("resultatPass").innerHTML += "<br/>Conte Caracters especials: " + especials;
}















