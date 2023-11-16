<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Resultados</title>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $arreglo = array();

            foreach ($_POST as $key => $value) {
                if (strpos($key, 'numero_') !== false) {
                    // Verificar si el valor es par antes de agregarlo al arreglo
                    if ($value % 2 == 0) {
                        $arreglo[] = $value;
                    }
                }
            }

            if (!empty($arreglo)) {
                echo "<h2>Números pares ingresados:</h2>";
                echo "<p>[" . implode(", ", $arreglo) . "]</p>";
            } else {
                echo "<h2>No se ingresaron números pares válidos.</h2>";
            }
        } else {
            echo "<h2>No se recibieron datos válidos.</h2>";
        }
        ?>
        <br/>
        <a href="index.html">Volver</a>
    </div>
</body>
</html>