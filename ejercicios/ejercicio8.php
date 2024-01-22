<?php
    if($_POST){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        $suma = $n1 + $n2;
        $resta = $n1 - $n2;
        $multiplicacion = $n1 * $n2;
        $division = $n1 / $n2;

        echo "<br/>"."La suma es: ".$suma;
        echo "<br/>"."La resta es: ".$resta;
        echo "<br/>"."La multiplicacion es: ".$multiplicacion;
        echo "<br/>"."La division es: ".$division;
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
    <form action="ejercicio8.php" method="post">
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