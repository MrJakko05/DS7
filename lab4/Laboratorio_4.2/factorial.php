<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Factorial</title>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            $factorial = 1;

            for ($i = 1; $i <= $numero; $i++) {
                $factorial *= $i;
            }

            // Añadir comas después de cada tres dígitos enteros
            $factorial_con_comas = number_format($factorial);

            echo "<p>El factorial de $numero es: $factorial_con_comas</p>";
        } else {
            echo '<p>No se proporcionó un número para calcular el factorial.</p>';
        }
        ?>
        <a href="index.html">Volver</a>
    </div>
</body>
</html>
