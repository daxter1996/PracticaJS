/**
 * Created by jesus on 29/11/2016.
 */
var nom = prompt("Nom");
var ronda = 1;
var puntsPersona = 0;
var puntsMaquina = 0;

var paraules = new Array("papel","piedra","tijeras","lagarto","spock");

function jugo(opcio){
    var resultat;
    var opcioJugador = buscaEleccion(opcio.toLowerCase());
    var opcioMaquina = paraules[getRandomInt(0,4)];
    if(ronda <= 5){

        if(opcioJugador == "tijeras" && opcioMaquina == "papel"){
            resultat = "Ganado";
        }else if(opcioJugador == "papel" && opcioMaquina == "piedra"){
            resultat = "Ganado";
        }else if(opcioJugador == "piedra" && opcioMaquina == "lagarto"){
            resultat = "Ganado";
        }else if(opcioJugador == "lagarto" && opcioMaquina == "spock"){
            resultat = "Ganado";
        }else if(opcioJugador == "spock" && opcioMaquina == "tijeras"){
            resultat = "Ganado";
        }else if(opcioJugador == "tijeras" && opcioMaquina == "lagarto"){
            resultat = "Ganado";
        }else if(opcioJugador == "lagarto" && opcioMaquina == "papel"){
            resultat = "Ganado";
        }else if(opcioJugador == "papel" && opcioMaquina == "spock"){
            resultat = "Ganado";
        }else if(opcioJugador == "spock" && opcioMaquina == "piedra"){
            resultat = "Ganado";
        }else if(opcioJugador == "piedra" && opcioMaquina == "tijeras"){
            resultat = "Ganado";
        }else if(opcioJugador == opcioMaquina){
            resultat = "Empate";
        }else{
            resultat = "Perdido";
        }
        if(resultat != "Empate"){
            if(resultat == "Ganado"){
                puntsPersona++;
                ronda++;
            }else{
                puntsMaquina++;
                ronda++;
            }
            document.getElementById("result").innerHTML =nom + ", has escogido<strong> " +
                opcioJugador + "</strong> y la máquina escogió <strong> " + opcioMaquina + "</strong>, Has " + resultat + " la ronda!!! Resultado,  maquina: " + puntsMaquina + " persona: " + puntsPersona;
        }else{
            alert("El resultat es empat, es repetira la ronda.");
        }
    }else{
        alert("Has superat els intents");
    }
}

function getRandomInt(min, max) {
    return Math.floor(Math.random()*(max-min))+min;
}

function buscaEleccion(texto) {
    var paraules2 = texto.split(" ");
    var eleccio;

    for(var j = 0;j<paraules2.length;j++) {
        for (var i = 0; i < paraules.length; i++) {
            if(paraules[i] == paraules2[j]){
                eleccio = paraules[i];
                break;
            }
        }
        if(eleccio!=null){break;}
    }
    return eleccio;
}