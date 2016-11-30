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
<body onload="horari1(2,9,17,'horari1');horari2(1,14,22,'horari2')" >
<br/>
<div class="container">
    <h2>Piedra Papel Tijera Lagarto Spock</h2>
    <div class="row">
        <div class="col s12 ">
            <div class="card">
                <div class="card-image">
                    <img src="img/piedra-papel-tijeras.png">
                    <span class="card-title"></span>
                </div>
                <div class="card-content">
                    <p>Juga al joc creat per el Dr. Sheldon Cooper a la famosa serie "Big Bang Theory"</p>
                </div>
                <div class="card-action">
                    <a href="grafic.php" class="waves-effect waves-light btn amber darken-2">Mode Grafic</a>
                    <a href="text.html" class="waves-effect waves-light btn amber darken-2">Mode Text</a>
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