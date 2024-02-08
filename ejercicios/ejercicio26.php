<?php
    #constructores
    class persona{
        public $nombre; //propiedades
        private $edad; // solo accedido por la clase
        protected $altura; // accedido por la clase y heredadas

        function __construct($nuevoNombre){
            $this->nombre = $nuevoNombre;
        }

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

    $objAlumno1 = new persona("Roudi");
    //$objAlumno1->asignarNombre("Roudi");
    $objAlumno1->imprimirPropiedades();
?>

