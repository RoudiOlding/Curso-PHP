<?php
    session_start();

    echo "En otra página: ";

    if( isset($_SESSION["usuario"])){ #sino está vacía, ejecuta . . .
        echo "Usuario: ".$_SESSION["usuario"].", Estatus: ".$_SESSION["estatus"];
    } else {
        echo "No hay datos";
    }
?>

