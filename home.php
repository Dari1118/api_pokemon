<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Porfavor debes iniciar sesión");
                window.location = "index.php";
        ';
        session_destroy();
        die();
    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Home</title>
</head>
<body>
    
        <div class="contenedor-botones">
            <button onclick="location.href='bulbasaur.php'" class="boton"><span>bulbasaur</span></button>
            <button onclick="location.href='ivysaur.php'" class="boton"><span>ivysaur</span></button>
            <button onclick="location.href='venusaur.php'" class="boton"><span>venusaur</span></button>
            <button onclick="location.href='charmander.php'" class="boton"><span>charmander</span></button>
            <button onclick="location.href='charmeleon.php'" class="boton"><span>charmeleon</span></button>
            <button onclick="location.href='charizard.php'" class="boton"><span>charizard</span></button>
            <button onclick="location.href='squirtle.php'" class="boton"><span>squirtle<span></button>
            <button onclick="location.href='wartortle.php'" class="boton"><span>wartortle</span></button>
            <button onclick="location.href='blastoise.php'" class="boton"><span>blastoise</span></button>
            <button onclick="location.href='caterpie.php'" class="boton"><span>caterpie</span></button>
            <button onclick="location.href='metapod.php'" class="boton"><span>metapod</span></button>
            <button onclick="location.href='butterfree.php'" class="boton"><span>butterfree</span></button>
            <button onclick="location.href='weedle.php'" class="boton"><span>weedle</span></button>
            <button onclick="location.href='kakuna.php'" class="boton"><span>kakuna</span></button>
            <button onclick="location.href='beedrill.php'" class="boton"><span>beedrill</span></button>
            <button onclick="location.href='pidgey.php'" class="boton"><span>pidgey</span></button>
            <button onclick="location.href='pidgeotto.php'" class="boton"><span>pidgeotto</span></button>
            <button onclick="location.href='pidgeot.php'" class="boton"><span>pidgeot</span></button>
            <button onclick="location.href='rattata.php'" class="boton"><span>rattata</span></button>
            <button onclick="location.href='raticate.php'" class="boton"><span>raticate</span></button>
        </div>
<br><br><br>
    <a href="php/cerrar_sesion.php" class="boton">Cerrar sesión</a>
    
</body>
</html>
