<!DOCTYPE html>

<?php
    if(array_key_exists('enviar', $_POST)) {
        $expire = time() + 60 * 5;
        setcookie("user", $_REQUEST['visitante'], $expire);
        header("Refresh:0");
    } 
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Laboratorio 13</title>
</head>
<body>

    <h1>Creación de Cookies</h1>
    <h2>La cookie "User" tendra solo 5 minutos de duración</h2>
    <?php 
        if(isset($_COOKIE["user"])) {
            print("<br/>Hola <b>" .$_COOKIE["user"] ."</b> gracias por visitar nuestro sitio web<br/>");
        } else {
    ?>
        <form name="formcookie" method="post" action="lab132.php">
        <br/>Hola, primera vez que te vemos por nuestro sitio web ¿Como te llamas?
            <input type="text" name="visitante">
            <input name="enviar" value="Gracias por identificarte" type="submit"/><br/>
        </form>
    <?php 
        }    
    ?>
    <br/><a href="lab133.php">Continuar...</a>
</body>
</html>