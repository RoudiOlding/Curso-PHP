<?php 
    if($_POST){
        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];
    
        echo "Bienvenido, ".$nombre." ".$apellido;
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
    <form method="post">
        Nombre:
        <input type="text" name="txtNombre">
        <br>
        Apellido:
        <input type="text" name="txtApellido">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>