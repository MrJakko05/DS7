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
    require_once 'MatrizIdentidad.php';

    try {
        // Verificar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener el valor de N desde el formulario
            $orden = isset($_POST["orden"]) ? intval($_POST["orden"]) : 0;

            // Crear una instancia de la clase MatrizIdentidad
            $matrizIdentidad = new MatrizIdentidad($orden);

            // Obtener y mostrar la matriz identidad
            echo $matrizIdentidad->getMatrizIdentidad();
        }
    } catch (InvalidArgumentException $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
    ?>

    <p><a href="index.html">Volver al formulario</a></p>
</body>
</html>