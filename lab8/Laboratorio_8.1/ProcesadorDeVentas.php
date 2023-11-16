<?php

class ProcesadorDeVentas
{
    private $ventas;

    public function __construct($ventas)
    {
        $this->ventas = $ventas;
    }

    public function determinarImagen()
    {
        if ($this->ventas > 80) {
            return './assets/Caso1.png';
        } elseif ($this->ventas >= 50 && $this->ventas <= 79) {
            return './assets/Caso2.png';
        } else {
            return './assets/Caso3.png';
        }
    }

    public function mostrarResultado()
    {
        $imagen = $this->determinarImagen();
        echo "<img src=\"$imagen\" alt=\"Resultado de Ventas\">";
    }
}

?>