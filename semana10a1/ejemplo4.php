<?php 
    session_start();

    if(isset ($_SESSION["usuario"])){
        echo "Bievenido de nuevo".$_SESSION["usuario"];
        echo "<br>";
        echo "Perfil de ".$_SESSION["rol"];
        echo "<br>";
        echo "Ultima vez en linea ".$_SESSION["ultimo_acceso"];
    }
    else {
        echo "No has iniciado sesion";
    }
?>

    <a href="logout.php">Cerrar Sesion</a>