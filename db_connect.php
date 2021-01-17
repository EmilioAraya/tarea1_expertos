<?php
//Conexión a BD
$connection = mysqli_connect('163.178.107.10', 'laboratorios', 'KmZpo.2796');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, '2020_b50486_tarea1');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}