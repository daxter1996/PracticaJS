<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<header>
    <?php include_once "header.php"; ?>
</header>
<body>
<br/>
<div class="container">
    <h1>Qui som?</h1>
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-image">
                    <img src="img/ciclismo.jpg">
                </div>
                <div class="card-content">
                    <h4>INFO</h4>
                    <strong>INFO</strong>
                </div>
                <div class="card-action">
                    <a href="#">Mas Informacion</a>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <hr/>
    <h1>Noticies</h1>
    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img src="img/G243TTCC-D5-SIDE-ALMA_29_MLTD_gris.jpg">
                </div>
                <div class="card-content">
                    <h4>Orbea ALMA M-LTD</h4>
                    <strong>PRECIO: 6000€</strong>
                </div>
                <div class="card-action">
                    <a href="https://www.orbea.com/es-es/bicicletas/alma-m-ltd" target="_blank">Mas Informacion</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                    <img src="img/bh1.jpg">
                </div>
                <div class="card-content">
                    <h4>BH G7 DISC</h4>
                    <strong>PRECIO: 5500€</strong>
                </div>
                <div class="card-action">
                    <a href="http://www.bhbikes.com/es/bicicletas/carretera/g7-disc-ultegra-di2-ld557.html" target="_blank">Mas Informacion</a>
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