<?php
    if($_POST){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        if(($n1 != $n2) && ($n1 > $n2)){
            echo "El valor n1 es distinto y mayor que n2";
        }

        if(($n1 != $n2) || ($n1 < $n2)){
            echo "El valor n1 es distinto y menor que n2";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones aritméticas</title>
</head>
<body>
    <form action="ejercicio9.php" method="post">
        Valor a:
        <input type="text" name="n1">
        <br>
        Valor b:
        <input type="text" name="n2">
        <br>
        <input type="submit" value="Calcular">
        
    </form>
</body>
</html>