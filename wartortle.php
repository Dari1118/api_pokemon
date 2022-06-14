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
    <title>Document</title>
</head>
<body>
    <h1>wartortle</h1>
    <p>-Chorro de Agua  <br>
    -Danza Lluvia <br>
    -Pistola Agua
</p>

    <img src="assets/images/5.png"><br><br><br>
    <a href="php/cerrar_sesion.php">Cerrar sesión</a>
    <a href="home.php">Regresar</a>
</body>
</html>