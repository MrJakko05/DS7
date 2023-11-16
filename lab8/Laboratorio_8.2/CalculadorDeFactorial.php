<?php

class CalculadorDeFactorial
{
    private $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function calcularFactorial()
    {
        $factorial = 1;

        for ($i = 1; $i <= $this->numero; $i++) {
            $factorial *= $i;
        }

        // Añadir comas después de cada tres dígitos enteros
        return number_format($factorial);
    }
}

?>