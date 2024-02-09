<?php
    session_start();

    $_SESSION["usuario"] = "Roudi";
    $_SESSION["estatus"] = "logueado";

    echo "En la página original: ";

    echo "Sesion iniciada". "<br/>";

    echo "Usuario: ".$_SESSION["usuario"].", Estatus: ".$_SESSION["estatus"];
?>