<?php
//llamado a conexión a BD
require('db_connect.php');


    // Asignar POST valores a variables.
    $sexo = (int) $_POST['sexo'];
    $recinto = (int) $_POST['recinto'];
    $promedio = (double) $_POST['promedio'];

    // llamado a procedimiento almacenado 
    $sql = "CALL Euclid4( $recinto, $promedio, $sexo)";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    // Se captura el resultado
    $hero_object = mysqli_fetch_object($result);
    // Se explicita cual columna se quiere
    $hero_estilo = $hero_object->Estilo;
    // Se muestra el resultado
    echo "<h2>" . $hero_estilo . "</h2>";
    // hipervinculo a la pantalla principal
    echo '<a href="index.php">Regresar</a>';
      
