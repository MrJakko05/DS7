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
        if (isset($_POST['ventas'])) {
            $ventas = $_POST['ventas'];

            if ($ventas > 80) {
                echo '<img src="./assets/Caso1.png" alt="Ventas Superiores al 80%">';
            } elseif ($ventas >= 50 && $ventas <= 79) {
                echo '<img src="./assets/Caso2.png" alt="Ventas entre 50% y 79%">';
            } else {
                echo '<img src="./assets/Caso3.png" alt="Ventas Inferiores al 50%">';
            }
        } else {
            echo '<p>No se proporcionó el porcentaje de ventas.</p>';
        }
        ?>
        <br/>
        <a href="index.html">Volver</a>
    </div>
</body>
</html>