<?php 
    $jsonContenido = 
    '[
        {"nombre": "Emma", "apellido": "Olding"},
        {"nombre": "Roudi", "apellido": "Olding"}
    ]';

    $resultado = json_decode($jsonContenido);
    //print_r($resultado);

    foreach ($resultado as $persona){
        echo ($persona->nombre) .' '. ($persona->apellido). "<br/>";
    }

?>

