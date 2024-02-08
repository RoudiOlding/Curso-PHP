<?php
    #métodos estáticos, llamarse sin tener una instancia

    class unaClase{
        public static function unMetodo(){
            echo "Hola soy un método estático"."<br/>";
        }
    }

    #forma 1
    $obj = new unaClase();
    $obj->unMetodo();

    #forma 2
    unaClase::unMetodo();
?>