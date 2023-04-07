<?php
require_once(dirname(__DIR__)."../Models/EjemplarModels.php");
require_once(dirname(__DIR__)."../Config/database.php");


    class EjemplarController{

    
        private $codigo;
        private $localizacion;
        private $codigoLibro;

        public function __construct($codigo, $localizacion, $codigoLibro, $opc){
            $this->codigo=$codigo;
            $this->localizacion=$localizacion;
            $this->codigoLibro=$codigoLibro;
            if($opc=="Actualizar"){
                $this->actualizar();
            }else if($codigo!=""){
                $this->guardar();
        }
    }

        public function index(){
            $ejemplar = new EjemplarModels();
            $data["ejemplar"] = $ejemplar->get_ejemplar();
            
            return $data;
  
            // $autor = new AutorModels();
            // $data["autor"] = $autor->get_autores();
            // require_once "../Views/pages/AgregarEjemplar.php";
        }

        public function guardar(){
            // $codautor = $_POST['CodigoAutor'];
            // $nomautor = $_POST['NombreAutor'];

            $autor = new EjemplarModels();
            $autor->insertar($this->codigo, $this->localizacion, $this->codigoLibro);
            require_once "../Views/pages/IndexEjemplar.php";
        }
        public function eliminar($id){
            $ejemplar = new EjemplarModels();
            $r = $ejemplar->delete_ejemplar($id);

            require_once dirname(__DIR__)."../Views/pages/IndexEjemplar.php";
        }
        public function actualizar(){
            $ejemplar = new EjemplarModels();
            $ejemplar->actualizar($this->codigo, $this->codigoLibro, $this->localizacion);

            require_once dirname(__DIR__)."../Views/pages/IndexEjemplar.php";
        }
    }
?>