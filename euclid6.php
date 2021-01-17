<?php
//llamado a conexión a BD
require('db_connect.php');


    // Asignar POST valores a variables.
    $confiabilidad = (int) $_POST['confiabilidad'];
    $enlaces = (int) $_POST['enlaces'];
    $capacidad = (int) $_POST['capacidad'];
    $costo = (int) $_POST['costo'];

    // llamado a procedimiento almacenado 
    $sql = "CALL Euclid6( $confiabilidad, $enlaces, $capacidad, $costo)";

    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    // Se captura el resultado
    $hero_object = mysqli_fetch_object($result);
    // Se explicita cual columna se quiere
    $hero_estilo = $hero_object->Class;
    // Se muestra el resultado
    echo "<h2>" . $hero_estilo . "</h2>";
    // hipervinculo a la pantalla principal
    echo '<a href="index.php">Regresar</a>';