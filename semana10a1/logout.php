<?php
    session_start();
    session_unset();
    echo "Has cerrado sesion"
?>
<a href="login.php">Inicia sesion nuevamente</a>