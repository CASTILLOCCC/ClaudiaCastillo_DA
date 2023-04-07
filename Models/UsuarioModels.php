<?php
    class UsuarioModels{

        private $db;
        private $usuarios;
    

        public function __construct(){
            $this->db = Conexion::Conexion();
            $this->usuarios = array();
        }

        public function insertar($codigo, $nombre, $telefono, $direccion){
            $resultado = $this->db->query("INSERT INTO usuarios values('$codigo', '$nombre', '$telefono', '$direccion')");
        }
        public function get_usuario(){
            $sql = "SELECT * FROM usuarios";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->usuarios[] = $row;
            }
            return $this->usuarios;
        }
        public function delete_usuarios($cod){
            $sql = "DELETE FROM usuarios WHERE codigoUsuario=".$cod;
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
    }

    }

?>