<?php
include 'conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];

    $stmt = $conexionmysql->prepare("UPDATE productos SET
    nombre=?,precio=?,cantidad=?,fcaducidad=? WHERE id=?");

    $stmt->bind_param("sdisi",$nombre,$precio,$cantidad,$fecha,$id);
    $stmt->execute();
    $stmt->close();
    header("Location:index.php");

?>