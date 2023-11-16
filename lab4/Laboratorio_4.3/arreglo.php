<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Resultado</title>
</head>
<body>
    <div class="container">
        <?php
        // Llenar el arreglo unidimensional con 20 elementos diferentes
        $arreglo = array();
        $elementos_insertados = 0;

        while ($elementos_insertados < 20) {
            $numero_aleatorio = rand(1, 100); // Números aleatorios del 1 al 100

            // Verificar si el número aleatorio ya está en el arreglo
            if (!in_array($numero_aleatorio, $arreglo)) {
                $arreglo[] = $numero_aleatorio;
                $elementos_insertados++;
            }
        }

        // Encontrar el elemento mayor y su posición
        $elemento_mayor = max($arreglo);
        $posicion_elemento_mayor = array_search($elemento_mayor, $arreglo) + 1; // Sumamos 1 para obtener la posición en base 1

        // Mostrar el arreglo
        echo "<p>Arreglo generado: [" . implode(", ", $arreglo) . "]</p>";
        echo "<p>El elemento mayor es $elemento_mayor y se encuentra en la posición $posicion_elemento_mayor del arreglo.</p>";
        ?>
        <a href="index.html">Volver</a>
    </div>
</body>
</html>