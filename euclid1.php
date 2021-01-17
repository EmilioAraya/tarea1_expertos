<?php
//llamado a conexión a BD
require('db_connect.php');


    // Asignar POST valores a variables.
    $CA = (int) $_POST['CA'];
    $EC = (int) $_POST['EC'];
    $EA = (int) $_POST['EA'];
    $OR = (int) $_POST['OR'];

    // llamado a procedimiento almacenado 
    $sql = "CALL Euclid1( $EA, $EC, $OR, $CA)";

    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    // Se captura el resultado
    $hero_object = mysqli_fetch_object($result);
    // Se explicita cual columna se quiere
    $hero_estilo = $hero_object->Estilo;
    // Se muestra el resultado
    echo "<h2>" . $hero_estilo . "</h2>";
    // hipervinculo a la pantalla principal
    echo '<a href="index.php">Regresar</a>';

