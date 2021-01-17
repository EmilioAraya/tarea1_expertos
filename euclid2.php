<?php
//llamado a conexión a BD
require('db_connect.php');


    // Asignar POST valores a variables.
    $estilo = (int) $_POST['estilo'];
    $sexo = (int) $_POST['sexo'];
    $promedio = (double) $_POST['promedio'];

    // llamado a procedimiento almacenado 
    $sql = "CALL Euclip2( $estilo, $promedio, $sexo)";

    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    // Se captura el resultado
    $hero_object = mysqli_fetch_object($result);
    // Se explicita cual columna se quiere
    $hero_estilo = $hero_object->Recinto;
    // Se muestra el resultado
    echo "<h2>" . $hero_estilo . "</h2>";
    // hipervinculo a la pantalla principal
    echo '<a href="index.php">Regresar</a>';    
