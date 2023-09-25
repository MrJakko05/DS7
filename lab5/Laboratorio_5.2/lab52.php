<?php 
    if(is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {

        $limite_tamano = 1024 * 1024; // 1 MB en bytes

        // Array con las extensiones permitidas
        $extensiones_permitidas = array("jpg", "jpeg", "gif", "png");

        // Verificar que el archivo sea una imagen y cumpla con el límite de tamaño
        $extension = pathinfo($_FILES['nombre_archivo_cliente']['tmp_name'], PATHINFO_EXTENSION);

        $nombreDirectorio = "archivos/";
        $nombreArchivo = $_FILES['nombre_archivo_cliente']['name'];
        $tamanoArchivo = $_FILES['nombre_archivo_cliente']['size'];
        $nombreCompleto = $nombreDirectorio . $nombreArchivo;

        if (!in_array(strtolower($extension), $extensiones_permitidas)) {
            echo "El archivo no es una imagen válida. Solo se permiten archivos jpg, jpeg, gif y png.";
        } elseif ($tamanoArchivo > $limite_tamano) {      
            echo "El archivo es demasiado grande. El tamaño máximo permitido es 1 MB.";
        } else {
            if(is_file($nombreCompleto)) {
                $idUnico = time();
                $nombreArchivo = $idUnico . "-" . $nombreArchivo;
                echo "Archivo repetido, se cambiara el nombre a $nombreArchivo <br><br>";
            }

            move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'],
            $nombreDirectorio . $nombreArchivo);

            echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
        }
    } else {
        echo "No se ha podido subir el archivo <br>";
    }
?>