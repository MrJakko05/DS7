<!DOCTYPE html>

<?php
    session_start();
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Laboratorio 12</title>
</head>
<body>

    <h1>Manejo de sesiones</h1>
    <h2>Paso 1: se crea la variable de sesion y se almacena</h2>

    <?php
        $var = "Ejemplo Sesiones";
        $_SESSION['var'] = $var;
        print("<p>Valor de la variable de sesion: $var</p>\n")
    ?>

    <a href="lab122.php">Paso 2</a>

</body>
</html>