<?php

    function duplicarvalor($numero){
        $numero = $numero*2;
        echo "El doble de ese numero es: ".$numero;
    }

    function duplicarreferencia(&$numero){
        $numero = $numero*2;
        return $numero;
        }

    $miNumero = 10;
    echo "El numero que mande es: ".$miNumero;
    echo "<br>";
     echo "El numero que mande ahora es: ".$miNumero;
    duplicarvalor($miNumero);
    echo "<br>";
    

    $miNumero2 = 40;
    echo "El numero que mande es: ".$miNumero2;
    echo "<br>";
    echo duplicarreferencia($miNumero2);
    echo "El numero que mande ahora es: ".$miNumero2;


    

?>