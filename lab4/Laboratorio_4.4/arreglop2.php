<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Ingresar valores</title>
    <script>
        function validarNumero(input) {
            var numero = input.value;
            if (numero % 2 !== 0) {
                input.setCustomValidity('Digite números pares. Inténtelo nuevamente.');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['cantidad'])) {
                $cantidad = $_POST['cantidad'];

                echo "<h2>Ingrese $cantidad números pares:</h2>";
                echo '<form action="mostrar.php" method="post">';

                for ($i = 0; $i < $cantidad; $i++) {
                    $input_name = "numero_$i";
                    echo '<label for="' . $input_name . '">Número en la posición ' . $i . ':</label>';
                    echo '<input type="number" name="' . $input_name . '" id="' . $input_name . '" required oninput="validarNumero(this)"><br>';
                }

                echo '<button type="submit">Generar Arreglo</button>';
                echo '</form>';
            } else {
                echo '<p>No se proporcionó la cantidad de números.</p>';
            }
        }
        ?>
        <br/>
        <a href="index.html">Volver</a>
    </div>
</body>
</html>