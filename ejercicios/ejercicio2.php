<?php
    // Para recepcionar datos

    if($_POST){
        // Recibir información del formulario HTML (Método POST)
        $nombre = $_POST['txtNombre'];

        echo "Hola".$nombre;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estamos de vuelta en HTML</h1>
    <h3>Formulario</h3>
    <form action="ejercicio2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre">
        <br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>