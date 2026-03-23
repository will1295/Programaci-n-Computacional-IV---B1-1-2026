<?php
    session_start();

    $usuario_enviado = $_POST['usuario'];
    $contra_enviada = $_POST['contra'];

    if($usuario_enviado == "juanito" && $contra_enviada == 1234 ){
        $_SESSION["usuario"] = $usuario_enviado;
        $_SESSION["rol"] = "usuario";
        $_SESSION["ultimo_acceso"] = date("Y-m-d H:i:s");
        header("Location:ejemplo4.php");
    }

?>