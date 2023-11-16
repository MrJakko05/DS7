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
        require_once 'ProcesadorDeVentas.php';

        if (isset($_POST['ventas'])) {
            $ventas = $_POST['ventas'];

            // Crear una instancia de la clase VentasProcessor
            $ventasProcessor = new ProcesadorDeVentas($ventas);

            // Mostrar el resultado utilizando la instancia
            $ventasProcessor->mostrarResultado();
        } else {
            echo '<p>No se proporcionó el porcentaje de ventas.</p>';
        }
        ?>
        <br/>
        <a href="index.html">Volver</a>
    </div>
</body>
</html>