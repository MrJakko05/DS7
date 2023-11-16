<?php

class MatrizIdentidad
{
    private $orden;

    public function __construct($orden)
    {
        $this->setOrden($orden);
    }

    public function setOrden($orden)
    {
        // Verificar si N es un número par
        if ($orden % 2 == 0 && $orden > 0) {
            $this->orden = $orden;
        } else {
            throw new InvalidArgumentException("Ingrese un número entero positivo par para generar la matriz identidad.");
        }
    }

    public function getMatrizIdentidad()
    {
        $matriz = "<p>Matriz Identidad de orden $this->orden:</p>";
        $matriz .= "<pre>";
        for ($i = 0; $i < $this->orden; $i++) {
            for ($j = 0; $j < $this->orden; $j++) {
                $matriz .= ($i == $j) ? "1 " : "0 ";
            }
            $matriz .= "<br>";
        }
        $matriz .= "</pre>";

        return $matriz;
    }
}
?>