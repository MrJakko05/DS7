<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Generador de Matriz Identidad</title>
</head>
<body>
    <h2>Resultado - Generador de Matriz Identidad</h2>

    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el valor de N desde el formulario
        $orden = isset($_POST["orden"]) ? intval($_POST["orden"]) : 0;

        // Verificar si N es un número par
        if ($orden % 2 == 0 && $orden > 0) {
            // Generar la matriz identidad
            echo "<p>Matriz Identidad de orden $orden:</p>";
            echo "<pre>";
            for ($i = 0; $i < $orden; $i++) {
                for ($j = 0; $j < $orden; $j++) {
                    echo ($i == $j) ? "1 " : "0 ";
                }
                echo "<br>";
            }
            echo "</pre>";
        } else {
            echo "<p>Ingrese un número entero positivo par para generar la matriz identidad.</p>";
        }
    }
    ?>

    <p><a href="index.html">Volver al formulario</a></p>
</body>
</html>