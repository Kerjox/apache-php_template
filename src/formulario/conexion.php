<?php

//$database_name = $_GET["db"];
$database_name = "netflix";
$mysqli = mysqli_connect("database", "user", "IVSZ2e12", "formulario");

if (!$mysqli) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
//echo "Información del host: " . mysqli_get_host_info($mysqli    ) . PHP_EOL;

?>