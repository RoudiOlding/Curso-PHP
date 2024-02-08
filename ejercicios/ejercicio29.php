<?php 
    #atributos que siempre debemos de declarar
    $servidor = "localhost"; // 127.0.0.1
    $usuario = "root";
    $contrasenia = "";

    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql ="SELECT * FROM `fotos`";

        $sentencia=$conexion->prepare($sql);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll();

        //print_r($resultado);

        foreach($resultado as $item){
            echo $item['id']."--".$item["nombre"]."--".$item["ruta"]."<br/>";
        }

        echo "Conexión establecida";
    } catch(PDOException $error) {
        echo "Conexión erronea".$error;
    }
?>