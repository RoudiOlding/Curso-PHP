<?php 
    #atributos que siempre debemos de declarar
    $servidor = "localhost"; // 127.0.0.1
    $usuario = "root";
    $contrasenia = "";

    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        #insertando dato con cada ejecución
        $sql= "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) 
            VALUES (NULL, 'trench', 'https://upload.wikimedia.org/wikipedia/en/f/f3/Trench_Twenty_One_Pilots.png')";

        $conexion->exec($sql);

        echo "Conexión establecida";
    } catch(PDOException $error) {
        echo "Conexión erronea".$error;
    }
?>
