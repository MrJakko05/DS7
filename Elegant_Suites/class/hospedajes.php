<?php

    require_once('modeloBD.php');

    class Hospedajes extends ModeloBD {
        protected $id;
        protected $nombre;
        protected $imagen;
        protected $descripcion;
        protected $categoria;
        protected $rating;
        protected $precio;

        public function __construct () {
            parent::__construct();
        }

        public function consultar_hospedajes() {
            $instruccion = "CALL sp_listar_hospedajes()";
            $consulta = $this->_db->query($instruccion);
    
            if (!$consulta) {
                echo "Fallo al consultar los hospedajes";
                return false;
            }
    
            return $consulta;  // Devuelve el resultado de la consulta
        }

        public function consultar_hospedajes_filtro($campos, $valor) {
            $instruccion = "CALL sp_listar_hospedajes_filtro('" . $campos . "', '" . $valor . "')";
            
            $consulta = $this->_db->query($instruccion);
            
            if ($consulta) {
                $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
                $consulta->close();
                $this->_db->close();
                
                if ($resultado) {
                    return $resultado;
                } else {
                    echo "No se encontraron resultados para la búsqueda.";
                }
            } else {
                echo "Error al ejecutar el procedimiento almacenado.";
            }
        } 

    }

?>