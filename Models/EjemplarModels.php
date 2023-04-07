<?php
    class EjemplarModels{

        private $db;
        private $ejemplar;

        public function __construct(){
            $this->db = Conexion::Conexion();
            $this->ejemplar = array();
        }

        public function insertar($codigo, $localizacion, $codigoLibro){
            $resultado = $this->db->query("INSERT INTO ejemplar values('$codigo', '$localizacion', '$codigoLibro')");
        }
        public function get_ejemplar(){
            $sql = "SELECT * FROM ejemplar";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->ejemplar[] = $row;
            }
            return $this->ejemplar;
        }
        public function delete_ejemplar($cod){
            $sql = "DELETE FROM ejemplar WHERE codigoEjemplar=".$cod;
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
    }

    public function actualizar($codigo,$codigoLibro, $loca){
        $resultado = $this->db->query("UPDATE ejemplar SET codigolibro='$codigoLibro', localizacion='$loca'  where codigoejemplar='$codigo'");
    }

    public function get_id($codigo){
        $sql = "SELECT * FROM ejemplar WHERE codigoejemplar=".$codigo;
        $res = $this->db->query($sql);
        if($row = $res->fetch_assoc()){
            $this->ejemplar[] = $row;
        }
        return $this->ejemplar;
    }
}
?>