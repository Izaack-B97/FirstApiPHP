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

        public function setFechaNacimiento( $fechaNacimiento ) {
            $this -> fechaNacimiento = $fechaNacimiento;
        }
        
        public function setGenero( $genero ) {
            $this -> genero = $genero;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getApellido() {
            return $this -> apellido;
        }

        public function getFechaNacimiento() {
            return $this -> fechaNacimiento;
        }

        public function getGenero() {
            return $this -> genero;
        }

        // ************************************ CRUD ***********************************

        public static function getUser() {
            echo file_get_contents('../data/usuarios.json');
        }

        public function createUser() {
            $contenidoArchivo = file_get_contents('../data/usuarios.json');
            $usuarios = json_decode( $contenidoArchivo, true );
            $usuarios[] = array(
                'nombre' => $this -> nombre,
                'apellido' => $this -> apellido,
                'fechaNacimiento' => $this -> fechaNacimiento,
                'genero' => $this -> genero 
            );
            
            $archivo = fopen('../data/usuarios.json', 'w'); // Solo abrir el archivo para escritura
            fwrite( $archivo, json_encode( $usuarios ) ); // Escribimos en el archivo 
            fclose( $archivo ); // Cerramos el archivo
        }

        public function updateUser() {

        }

        public function deleteUser() {

        }
  
        // ********************************* END CRUD ************************************

    }
?>