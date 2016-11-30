
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
    <nav>
        <div class="nav-wrapper amber darken-2" style="box-shadow: 0px 15px 37px -2px rgba(0,0,0,0.3);">
            <a href="index.php" class="brand-logo center">Modo Grafico</a>

        </div>
    </nav>
</header>
<body>
<br/>
<div class="container">
    <h2>Piedra Papel Tijera Lagarto Spock</h2>
    <div class="row ">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <img onclick="jugo('piedra')" src="img/pedra.png" height="150px">
                    <img onclick="jugo('papel')" src="img/papel.png" height="150px">
                    <img onclick="jugo('tijeras')" src="img/tijera.png" height="150px">
                    <img onclick="jugo('lagarto')" src="img/lagarto.png" height="150px">
                    <img onclick="jugo('spock')" src="img/spock.png" height="150px">
                </div>
            </div>
        </form>
    </div>
    <div id="result">

    </div>

</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="utilitats.js"></script>
<script type="text/javascript" src="javascript.js"></script>
</body>
<?php include_once "footer.php"; ?>
</html>