<?php

require_once('modelo.php');

class noticia extends modeloCredencialesBD {
    protected $titulo;
    protected $texto;
    protected $categoria;
    protected $fecha;
    protected $imagen;

    public function __construct() {
        parent::__construct();
    }

    public function consultar_noticias() {
        $instruccion = "CALL sp_listar_noticias()";
        $consulta = $this->_db->query($instruccion);

        if (!$consulta) {
            echo "Fallo al consultar las noticias";
            return false;
        }

        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        $consulta->close();
        $this->_db->close();

        return $resultado;
    }
}

?>