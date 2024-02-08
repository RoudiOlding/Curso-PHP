<?php

    class persona{
        public $nombre; //propiedades
        private $edad; // solo accedido por la clase
        protected $altura; // accedido por la clase y heredadas

        public function asignarNombre($nuevoNombre){
            $this->nombre = $nuevoNombre;
        }

        public function imprimirPropiedades(){
            echo "El nombre del alumno es: ". $this->nombre. "<br/>";
        }

        public function mostrarEdadPrivada(){
            $this->edad = 20;
            echo "<br/>".$this->edad. " Años";

        }
    }

    $objAlumno1 = new persona();
    $objAlumno1->asignarNombre("Roudi");

    $objAlumno2 = new persona();
    $objAlumno2->asignarNombre("Emma");

    echo "Sin método -> ". "<br/>";
    echo "El nombre del alumno 1 es: ". $objAlumno1->nombre. "<br/>El nombre del alumno 2 es: ".$objAlumno2->nombre."<br/>";

    echo "Con método -> ". "<br/>";
    $objAlumno1->imprimirPropiedades();
    $objAlumno2->imprimirPropiedades();

    echo $objAlumno1->nombre; //se puede por ser público
    //echo $objAlumno1->edad; //no se puede por ser privado
    //echo $objAlumno1->altura; // no se puede por ser protected

    $objAlumno1->mostrarEdadPrivada();
?>

