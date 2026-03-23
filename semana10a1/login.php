<?php
    session_start();

    $_SESSION["usuario"] = "XxxJuanitoProxxX";
    $_SESSION["rol"] = "usuario";
    $_SESSION["ultimo_acceso"] = date("Y-m-d H:i:s");

    echo "Haz iniciado sesion, haz click en el enlace para al dashboard";  
?>
<a href="ejemplo4.php">Ir a tu perfil</a>