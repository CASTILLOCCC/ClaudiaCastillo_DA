<?php
    class LibroModels{

        private $db;
        private $libro;
    

        public function __construct(){
            $this->db = Conexion::Conexion();
            $this->libro = array();
        }

        public function insertar($codigo, $titulo, $isbn, $codigoEditorial, $paginas, $codigoAutor){
            $resultado = $this->db->query("INSERT INTO libro values('$codigo', '$titulo', '$isbn', '$codigoEditorial', '$paginas', '$codigoAutor')");
        }
        public function get_libro(){
            $sql = "SELECT * FROM libro";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->libro[] = $row;
            }
            return $this->libro;
        }
        public function delete_libro($cod){
            $sql = "DELETE FROM libro WHERE codigoLibro=".$cod;
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
    }
    public function actualizar($codigo, $titulo, $isbn, $codigoEditorial, $paginas, $codigoAutor){
        $resultado = $this->db->query("UPDATE libro SET titulo='$titulo', isbn='$isbn', codigoEditorial='$codigoEditorial', paginas='$paginas', codigoAutor='$codigoAutor'  where codigolibro='$codigo'");
    }

    public function get_id($codigo){
        $sql = "SELECT * FROM libro WHERE codigolibro=".$codigo;
        $res = $this->db->query($sql);
        if($row = $res->fetch_assoc()){
            $this->libro[] = $row;
        }
        return $this->libro;
    }
}

?>