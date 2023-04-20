<?php
require_once(dirname(__DIR__)."../Models/UsuarioModels.php");
require_once(dirname(__DIR__)."../Config/database.php");

    class UsuarioController{

        private $codigo;
        private $nombre;
        private $telefono;
        private $direccion;
       


        public function __construct($codigo, $nombre, $telefono, $direccion, $opc ){
            $this->codigo = $codigo;
            $this->nombre = $nombre;
            $this->telefono = $telefono;
            $this->direccion = $direccion;         
            if($opc=="Actualizar"){
                $this->actualizar();
            }else if($codigo!=""){
                $this->guardar();
        }
        }

        public function index(){
            $usuario = new UsuarioModels();
            $data["usuarios"] = $usuario->get_usuario();
            
            return $data;
            // require_once "../Views/pages/AgregarEditorial.php";
            // require_once "../Views/pages/AgregarUsuario.php";
        }

        public function guardar(){

            $autor = new UsuarioModels();
            $autor->insertar($this->codigo, $this->nombre, $this->telefono, $this->direccion);

            require_once "../Views/pages/IndexUsuario.php";
            //$this->index();
        }

        public function eliminar($id){
            $usuario = new UsuarioModels();
            $r = $usuario->delete_usuarios($id);

            require_once dirname(__DIR__)."../Views/pages/IndexUsuario.php";
        }
         
        public function actualizar(){
        $usuario = new UsuarioModels();
        $usuario->actualizar($this->codigo, $this->nombre, $this->telefono, $this->direccion);

        require_once dirname(__DIR__)."../Views/pages/IndexUsuario.php";
        }
    }
?>