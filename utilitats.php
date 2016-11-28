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
<body>
<br/>
<div class="container">
    <h1>Utilitats</h1>
    <div class="row">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Calcula el teu IMC</span>
                    <p>
                        <input placeholder="Pes en Kg" id="imc" type="text" class="validate">
                        <a class="waves-effect waves-light btn blue-grey darken-2">Calcula</a>
                    </p>
                </div>
                <div class="card-action">
                    <a href="#">Resultat: </a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Calcula la teva FCM</span>
                    <p>
                        <input placeholder="Edat" id="fcm" type="text" class="validate">

                        <a class="waves-effect waves-light btn blue-grey darken-2">Home</a>
                        <a class="waves-effect waves-light btn blue-grey darken-2">Dona</a>
                    </p>
                </div>
                <div class="card-action">
                    <a href="#">Resultat: </a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Calcula la teva categoria</span>
                    <p>
                        <input placeholder="Any de neixament" id="categoria" type="text" class="validate">
                        <a class="waves-effect waves-light btn blue-grey darken-2">Calcula</a>
                    </p>
                </div>
                <div class="card-action">
                    <a href="#">Resultat: </a>
                </div>
            </div>
        </div>
    </div>
    <h2>Horari Associacio</h2>
    <div class="row">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Horari Dilluns a Divendres</span>
                    <p>
                        Horari
                    </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Horari Dilluns a Diumenge</span>
                    <p>
                        Horari
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<?php include_once "footer.php"; ?>
</html>