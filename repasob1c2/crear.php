<?php
include 'conexion.php';

    if(isset($_POST["guardar"])){
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $fecha = $_POST['fecha'];

        $stmt = $conexionmysql->prepare("INSERT INTO productos (nombre,precio
        ,cantidad,fcaducidad) VALUES (?,?,?,?)");
        $stmt->bind_param("sdis",$nombre,$precio,$cantidad,$fecha);
        $stmt->execute();
        $stmt->close();
        header("Location:index.php");
    }

?>