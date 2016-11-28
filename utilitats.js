/**
 * Created by jesus on 28/11/2016.
 */


function calculaIMC() {
    var altura = document.getElementById("altura").value;
    var pes = document.getElementById("pes").value;
    var imc = pes / (altura * altura);
    if (imc >= 0 && imc <= 16.00) {
        res = 'Infrapeso (delgadez severa)';
    } else if (imc > 16.00 && imc <= 16.99) {
        res = 'Infrapeso (delgadez moderada)';
    } else if (imc >= 17.00 && imc <= 18.49) {
        res = 'Infrapeso (delgadez aceptable)';
    } else if (imc > 18.49 && imc <= 24.99) {
        res = 'Peso normal';
    } else if (imc >= 25.00 && imc <= 29.99) {
        res = 'Sobrepeso';
    } else if (imc >= 30.00 && imc <= 34.99) {
        res = 'Obeso (Tipo I)';
    } else if (imc >= 35.00 && imc <= 40.00) {
        res = 'Obeso (Tipo II)';
    } else {
        res = 'Obeso (Tipo III)';
    }
    var string = document.getElementById("resultatIMC").value;
    document.getElementById("resultatIMC").innerHTML = "Resultat: " + res;

}

function calculaFCM(sexe) {
    var fcm;
    if(sexe == "dona"){
        var fcm = 214 - (0.8 * document.getElementById("edat").value);
    }else{
        var fcm = 209 - (0.8 * document.getElementById("edat").value);
    }
    document.getElementById("resultatFCM").innerHTML = "Resultat: " + fcm;
}

function calculaCategoria() {
    var fecha = new Date();
    var year = fecha.getFullYear();
    var edat = year - document.getElementById("categoria").value;
    var categoria;

    if(edat >= 15 && edat<=16){
        categoria = "Cadete";
    }else if(edat >= 17 && edat<=18){
        categoria = "Juvenil";
    }else if(edat >= 18 && edat<=23){
        categoria = "Sub 23";
    }else if(edat >= 23 && edat<=30){
        categoria = "Elite";
    }else if(edat >= 30){
        categoria = "Master";
    }

    document.getElementById("resultatCategoria").innerHTML = "Resultat: " + categoria;
}