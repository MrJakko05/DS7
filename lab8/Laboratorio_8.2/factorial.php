<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Factorial - POO</title>
</head>
<body>
    <div class="container">
        <?php
        require_once 'CalculadorDeFactorial.php';

        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];

            // Crear una instancia de la clase FactorialCalculator
            $factorialCalculator = new CalculadorDeFactorial($numero);

            // Calcular el factorial utilizando la instancia
            $factorial = $factorialCalculator->calcularFactorial();

            echo "<p>El factorial de $numero es: $factorial</p>";
        } else {
            echo '<p>No se proporcionó un número para calcular el factorial.</p>';
        }
        ?>
        <a href="index.html">Volver</a>
    </div>
</body>
</html>