<?php
    require_once 'conexion.php';

    $sql =  "SELECT nombre,apellido,edad,direccion FROM estudiantes";
    $resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registro de estudiantes</h1>
    <a href="form_registro_estudiante.php"><button>Registrar nuevo estudiante</button></a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Direccion</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($resultado -> num_rows>0){
                    while($fila =
                    $resultado->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$fila["nombre"]."</td>";
                        echo "<td>".$fila["apellido"]."</td>";
                        echo "<td>".$fila["edad"]."</td>";
                        echo "<td>".$fila["direccion"]."</td>";
                        echo "</tr>";
                    }
                }
                else{
                    echo "<tr><td>No se encontraron registros</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
    $conn->close();
?>