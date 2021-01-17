<?php
//llamado a conexión a BD
require('db_connect.php');


    // Asignar POST valores a variables.
    $edad = (int) $_POST['edad'];
    $genero = (int) $_POST['genero'];
    $autoevaluacion = (int) $_POST['autoevaluacion'];
    $veces = (int) $_POST['veces'];
    $expeticia = (int) $_POST['expeticia'];
    $habilidad = (int) $_POST['habilidad'];
    $experiencia = (int) $_POST['experiencia'];
    $experiencia2 = (int) $_POST['experiencia2'];

    // llamado a procedimiento almacenado 
    $sql = "CALL Euclid5( $edad, $genero, $autoevaluacion, $veces, $expeticia, $habilidad, $experiencia, $experiencia2)";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    // Se captura el resultado
    $hero_object = mysqli_fetch_object($result);
    // Se explicita cual columna se quiere
    $hero_estilo = $hero_object->Class;
    // Se muestra el resultado
    echo "<h2>" . $hero_estilo . "</h2>";
    // hipervinculo a la pantalla principal
    echo '<a href="index.php">Regresar</a>';

