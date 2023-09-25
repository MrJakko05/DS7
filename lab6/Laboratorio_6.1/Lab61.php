<!-- Laboratorio 6.1: Clase + Instancia de objeto en 1 solo archivo -->

<?php
    class cliente {

        // Atributos
        var $nombre;
        var $numero;
        var $peliculas_alquiladas;

        // Constructor
        function __construct($nombre, $numero) {
            $this -> nombre = $nombre;
            $this -> numero = $numero;
            $this -> peliculas_alquiladas = array();
        }

        // Destructor
        function __destruct() {
            echo "<br>destruido: " . $this -> nombre;
        }

        // Métodos
        function dame_numero() {
            return $this -> numero;
        }
    }

    // Instanciamos un par de objetos cliente
    $cliente1 = new cliente("Pepe", 1);
    $cliente2 = new cliente("Roberto", 564);

    // Mostramos el número de cada cliente creado
    echo "<br> El identificador del cliente 1 es: " . $cliente1->dame_numero();
    echo "<br> El identificador del cliente 2 es: " . $cliente2->dame_numero();
?>