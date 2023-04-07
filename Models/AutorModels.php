<?php
    class AutorModels{

        private $db;
        private $autor;

        public function __construct(){
            $this->db = Conexion::Conexion();
            // $this->autor = array();
        }

        public function insertar($codigo, $nombre){
            $resultado = $this->db->query("INSERT INTO autor values('$codigo', '$nombre', '101')");
        }

        public function get_autor(){
            $sql = "SELECT * FROM autor";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->autor[] = $row;
            }
            return $this->autor;
        }
        public function delete_autor($cod){
            $sql = "DELETE FROM autor WHERE codigoAutor=".$cod;
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
    }
    
    public function actualizar($codigo, $nombre){
        $resultado = $this->db->query("UPDATE autor SET nombreautor='$nombre'  where codigoautor='$codigo'");
    }

    public function get_id($codigo){
        $sql = "SELECT * FROM autor WHERE codigoautor=".$codigo;
        $res = $this->db->query($sql);
        if($row = $res->fetch_assoc()){
            $this->autor[] = $row;
        }
        return $this->autor;
    }
    }

?>