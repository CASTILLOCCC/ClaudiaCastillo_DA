<?php
    class PrestamoModels{

        private $db;
        private $prestamo;
    

        public function __construct(){
            $this->db = Conexion::Conexion();
            $this->prestamo = array();
        }

        public function insertar($codigoPrestamo, $codigoUsuario, $codigoEjemplar, $fechaPrestamo, $fechaDevolucion){
            $resultado = $this->db->query("INSERT INTO prestamo values('$codigoPrestamo', '$codigoUsuario', '$codigoEjemplar', '$fechaPrestamo', $fechaDevolucion)");
        }
        public function get_prestamo(){
            $sql = "SELECT * FROM prestamos";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->prestamo[] = $row;
            }
            return $this->prestamo;
        }
        public function delete_prestamo($cod){
            $sql = "DELETE FROM prestamos WHERE codigoPrestamo=".$cod;
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
    }
    }

?>