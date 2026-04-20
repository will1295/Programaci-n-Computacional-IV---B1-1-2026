<?php
include 'conexion.php';

    if(isset($_GET["eliminar"])){
        $id = $_GET["eliminar"];
        $stmt = $conexionmysql->prepare("DELETE FROM productos WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
        header("Location:index.php");
    }

?>