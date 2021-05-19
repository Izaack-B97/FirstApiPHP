<?php 
    class Usuario {
        private $nombre;
        private $apellido;
        private $fechaNacimiento;
        private $genero;
        
        public function __construct ( $nombre, $apellido, $fechaNacimiento, $genero ) {
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
            $this -> fechaNacimiento = $fechaNacimiento;
            $this -> genero = $genero;
        }

        public function setNombre( $nombre ) {
            $this -> nombre = $nombre;
        }
        
        public function setApellido( $apellido ) {
            $this -> apellido = $apellido;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getApellido() {
            return $this -> apellido;
        }

    }
?>