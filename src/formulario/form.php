<?php

    require_once 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $query = "INSERT INTO prueba01 (nombre, apellido) VALUES ('$nombre', '$apellido');";

    if ($mysqli->query($query) === TRUE) {

        printf("Se creó con éxtio la tabla myCity.\n");
    } else {

        printf("No creó la tabla myCity.\n");
    }
    
?>