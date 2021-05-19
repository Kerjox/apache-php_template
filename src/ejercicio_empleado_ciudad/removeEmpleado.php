<?php

    require_once 'conexion.php';

    $id_empleado = $_GET['id_empleado'];

    $query = "DELETE FROM empleado_copia WHERE id_empleado = $id_empleado;";

    if ($mysqli->query($query)) {
        
        echo "<h1>El empleado $id_empleado fué eliminado</h1>";
    } else {

        echo "<h1>El empleado $id_empleado no pudo ser borrado</h1>";
    }

    $mysqli->close();
?>