<?php
require_once(dirname(__DIR__)."../Models/LibroModels.php");
require_once(dirname(__DIR__)."../Config/database.php");
    class LibroController{

        private $codigo;
        private $titulo;
        private $isbn;
        private $codigoEditorial;
        private $paginas;
        private $codigoAutor;


        public function __construct($codigo, $titulo, $isbn, $codigoEditorial, $paginas, $codigoAutor, $opc ){
            $this->codigo = $codigo;
            $this->titulo = $titulo;
            $this->isbn = $isbn;
            $this->codigoEditorial = $codigoEditorial;
            $this->paginas = $paginas;
            $this->codigoAutor = $codigoAutor;
            if($opc=="Actualizar"){
                $this->actualizar();
            }else if($codigo!=""){
                $this->guardar();
        }
        }

        public function index(){
            $libro = new LibroModels();
            $data["libro"] = $libro->get_libro();
            return $data;
            // require_once "../Views/pages/AgregarEditorial.php";
            // require_once "../Views/pages/AgregarLibro.php";
        }

        public function guardar(){

            $autor = new LibroModels();
            $autor->insertar($this->codigo, $this->titulo, $this->isbn, $this->codigoEditorial, $this->paginas, $this->codigoAutor);

            require_once "../Views/pages/AgregarLibro.php";
            //$this->index();
        }

        public function eliminar($id){
            $libro = new LibroModels();
            $r = $libro->delete_libro($id);

            require_once dirname(__DIR__)."../Views/pages/IndexLibro.php";
        }

        public function actualizar(){
            $libro = new LibroModels();
            $libro->actualizar($this->codigo, $this->titulo, $this->isbn, $this->codigoEditorial, $this->paginas, $this->codigoAutor);

            require_once dirname(__DIR__)."../Views/pages/IndexLibro.php";
        }
    }
?>