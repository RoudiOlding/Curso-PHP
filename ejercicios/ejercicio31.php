<?php
    $txtNombre="";
    $rdgLenguaje="";

    if($_POST){
        $txtNombre = (isset($_POST["txtNombre"])) ? $_POST["txtNombre"] :"";
        $rdgLenguaje = (isset($_POST["lenguaje"])) ? $_POST["lenguaje"] :"";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){?>
        <strong>Hola: </strong> <?php echo $txtNombre?> <br/>
        <strong>Su lenguaje preferido es: </strong> <?php echo $rdgLenguaje?>
    <?php }?>

    <form action="ejercicio31.php" method="post">
        Nombre: <br/>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        <br/>
        ¿Cuál lenguaje prefieres?: <br/>
        <br/> php: <input type="radio" <?php echo ($rdgLenguaje=="php"?"checked":"")?> name="lenguaje" value= "php" id=""><br/>
        <br/> html: <input type="radio" <?php echo ($rdgLenguaje=="html"?"checked":"")?> name="lenguaje" value= "html" id=""><br/>
        <br/> css: <input type="radio" <?php echo ($rdgLenguaje=="css"?"checked":"")?> name="lenguaje" value= "css" id=""><br/>

        <input type="submit" value="Enviar Información">
    </form>
</body>
</html>
