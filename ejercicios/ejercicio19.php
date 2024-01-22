<?php
    $nombre = "Roudi Olding";

    echo "El nombre antes de la función: ".$nombre."<br/>";

    $nuevoNombre = strtoupper($nombre);

    echo "El nombre después de la función: ".$nuevoNombre."<br/>";

    //o

    echo "El nombre después de la función: ".strtoupper($nombre)."<br/>";

?>