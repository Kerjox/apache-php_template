<?php

    require_once './conexion.php';

    $table = "<table>
    <tr>
    <th>Título</th>
    <th>Año Lanzamiento</th>
    </tr>";
    
    $consulta = "SELECT p.titulo, p.anyo_lanzamiento FROM pelicula p;";
    
    if ($resultado = $mysqli->query($consulta)) {
        
        /* obtener un array asociativo */
        while ($fila = $resultado->fetch_assoc()) {
            
            $table .= 
            "<tr>
            <td>".$fila['titulo']."</td>
            <td>".$fila['anyo_lanzamiento']."</td>
            </tr>";
        }
        
        /* liberar el conjunto de resultados */
        $resultado->free();
    }

    mysqli_close($mysqli);
    $table .= "</table>";
    echo $table;
?>