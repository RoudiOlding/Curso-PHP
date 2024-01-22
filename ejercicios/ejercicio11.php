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

        if($n1 == $n2){

            echo "<br/>"."El valor de N1 es igual al de N2";

            if($n1 == 4){
                echo "<br/>"."El valor es 4";
            }
            
            if($n1 == 5){
                echo "<br/>"."El valor es 5";
            }
        }

        if( ($n1 != $n2) && ($n1 == 4) ){
            echo "El valor de N1 es igual a N2 y es el número 4";
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
    <form action="ejercicio11.php" method="post">
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