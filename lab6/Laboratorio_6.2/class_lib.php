<!-- Laboratorio 6.2: Clase + instancia de objeto en distintos archivos -->

<!-- CLASE -->
<?php 
    class cliente {
        var $nombre;
        var $numero;
        var $peliculas_alquiladas;

        function __construct($nombre, $numero) {
            $this -> nombre = $nombre;
            $this -> numero = $numero;
            $this -> peliculas_alquiladas = array();
        }

        function __destruct() {
            echo "<br>destruido: " . $this -> nombre;
        }

        function dame_numero() {
            return $this -> numero;
        }
    }
?>