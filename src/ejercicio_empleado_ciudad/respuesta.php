<?php

    require_once 'conexion.php';

    $city = $_POST['city'];

    $query = "SELECT e.id_empleado, e.nombre, e.apellidos, e.email FROM empleado e INNER JOIN direccion d
                on e.id_direccion = d.id_direccion INNER JOIN ciudad c
                    on d.id_ciudad = c.id_ciudad
                        WHERE c.nombre = '$city';";

    $table = "
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>@ Email</th>
            </tr>
        </thead>
    <tbody>";


    if ($resultado = $mysqli->query($query)) {
        
        /* obtener un array asociativo */
        while ($fila = $resultado->fetch_assoc()) {
            
            $table .= 
            "<tr>
            <td><b>".$fila['id_empleado']."</b></td>
            <td>".$fila['nombre']."</td>
            <td>".$fila['apellidos']."</td>
            <td>".$fila['email']."</td>
            </tr>";
        }
        
        /* liberar el conjunto de resultados */
        $resultado->free();
    }

    mysqli_close($mysqli);
    $table .= "</tbody></table>";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <title>Resultado ciudad</title>
</head>
<body>
    
    <div class="container">

    <?php echo $table; ?>

    </div>

    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

