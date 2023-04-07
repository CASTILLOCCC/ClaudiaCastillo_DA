<?php
require_once(dirname(__DIR__)."../Models/AutorModels.php");
require_once(dirname(__DIR__)."../Config/database.php");

    class AutorController{

       
        private $codigo;
        private $nombre;
        

        public function __construct($codigo, $nombre, $opc){
            $this->codigo = $codigo;
            $this->nombre = $nombre;
            if($opc=="Actualizar"){
                $this->actualizar();
            }else if($codigo!=""){
                $this->guardar();
            }

        }

        public function index(){
            $autor = new AutorModels();
            $data["autor"] = $autor->get_autor();
            return $data;
            // require_once "../Views/pages/IngresarAutores.php";
        }

        public function guardar(){
            // $codigoAutor = $_POST['codigoAutor'];
            // $nomautor = $_POST['nombreAutor'];

            $autor = new AutorModels();
            $autor->insertar($this->codigo, $this->nombre);
            require_once "../Views/pages/IndexAutor.php";
        }
        public function eliminar($id){
            $editorial = new AutorModels();
            $r = $editorial->delete_Autor($id);

            require_once dirname(__DIR__)."../Views/pages/IndexAutor.php";
        }

        public function actualizar(){
            $autor = new AutorModels();
            $autor->actualizar($this->codigo, $this->nombre);

            require_once "../Views/pages/IndexAutor.php";
        }
    }
?>