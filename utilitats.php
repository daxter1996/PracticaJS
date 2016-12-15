<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<header>
    <?php include_once "header.php"; ?>
</header>
<body onload="horari1(2,9,17,'horari1');horari2(1,14,22,'horari2');" >
<br/>
<div class="container">
    <h1>Utilitats</h1>

    <div class="row">
        <div class="col s12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Comprova si la contrasenya es segura</span>
                    <p>
                        <input placeholder="Contrasenya" id="pass" type="text" class="validate">
                        <a onclick="passwd(document.getElementById('pass').value)" class="waves-effect waves-light btn blue-grey darken-2">Comprova</a>
                    </p>
                </div>
                <div class="card-action">
                    <a id="resultatPass">Resultat: </a>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Calcula el teu IMC</span>
                    <p>
                        <input placeholder="Pes en Kg" id="pes" type="text" class="validate">
                        <input placeholder="Altura" id="altura" type="text" class="validate">
                        <a onclick="calculaIMC()" class="waves-effect waves-light btn blue-grey darken-2">Calcula</a>
                    </p>
                </div>
                <div class="card-action">

                    <table class="white-text bordered">
                        <tr>
                            <th>IMC</th>
                        </tr>
                        <tr>
                            <td id="imc1">Infrapeso (Delgadez Severa)</td>
                        </tr>
                        <tr>
                            <td id="imc2">Infrapeso (Delgadez moderada)</td>
                        </tr>
                        <tr>
                            <td id="imc3"> Infrapeso (delgadez aceptable)</td>
                        </tr>
                        <tr>
                            <td id="imc4">Peso normal</td>
                        </tr>
                        <tr>
                            <td id="imc5"> Obeso (Tipo I)</td>
                        </tr>
                        <tr>
                            <td id="imc6">Obeso (Tipo II)</td>
                        </tr>
                        <tr>
                            <td id="imc7">Obeso (Tipo III)</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Calcula la teva FCM</span>
                    <p>
                        <input placeholder="Edat" id="edat" type="text" class="validate">
                        <a onclick="calculaFCM('home')" class="waves-effect waves-light btn blue-grey darken-2">Home</a>
                        <a onclick="calculaFCM('dona')" class="waves-effect waves-light btn blue-grey darken-2">Dona</a>
                    </p>
                </div>
                <div class="card-action">
                    <a id="resultatFCM" href="">Resultat: </a>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Calcula la teva categoria</span>
                    <p>
                        <input placeholder="Any de neixament" id="categoria" type="text" class="validate">
                        <a onclick="calculaCategoria()" class="waves-effect waves-light btn blue-grey darken-2">Calcula</a>
                    </p>
                </div>
                <div class="card-action">
                    <table class="white-text bordered">
                        <tr>
                            <th>Categoria</th>
                        </tr>
                        <tr>
                            <td id="cat1">Cadete</td>
                        </tr>
                        <tr>
                            <td id="cat2">Juvenil</td>
                        </tr>
                        <tr>
                            <td id="cat3">Sub 23</td>
                        </tr>
                        <tr>
                            <td id="cat4">Elite</td>
                        </tr>
                        <tr>
                            <td id="cat5">Master</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <h2>Horari Associacio</h2>
    <div class="row">
        <div class="col s12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Horari Dilluns a Divendres</span>
                    <p >
                        <table id="horari1" class="bordered">
                            <tr>
                                <th>Hora</th>
                                <th>Dilluns</th>
                                <th>Dimarts</th>
                                <th>Dimecres</th>
                                <th>Dijous</th>
                                <th>Divendres</th>
                            </tr>
                        </table>
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Horari Dilluns a Diumenge</span>
                    <p>
                        <table id="horari2" class="bordered">
                            <tr>
                                <th>Hora</th>
                                <th>Dilluns</th>
                                <th>Dimarts</th>
                                <th>Dimecres</th>
                                <th>Dijous</th>
                                <th>Divendres</th>
                                <th>Disapte</th>
                                <th>Diumenge</th>
                            </tr>
                        </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="utilitats.js"></script>
</body>
<?php include_once "footer.php"; ?>
</html>