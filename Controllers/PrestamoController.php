<?php
require_once(dirname(__DIR__)."../Models/PrestamoModels.php");
require_once(dirname(__DIR__)."../Config/database.php");

    class PrestamoController{

        private $opcion;
        private $codigoPrestamo;
        private $codigoUsuario;
        private $codigoEjemplar;
        private $fechaPrestamo;
        private $fechaDevolucion;
       


        public function __construct($codigoPrestamo, $codigoUsuario, $codigoEjemplar, $fechaPrestamo, $fechaDevolucion, $opc ){
            $this->codigoPrestamo = $codigoPrestamo;
            $this->codigoUsuario = $codigoUsuario;
            $this->codigoEjemplar = $codigoEjemplar;
            $this->fechaPrestamo = $fechaPrestamo;      
            $this->fechaDevolucion = $fechaDevolucion;   
            if($codigoPrestamo!=""){
                $this->guardar();
            }
        }

        public function index(){
            $prestamo = new PrestamoModels();
            $data["prestamos"] = $prestamo->get_prestamo();
            
            return $data;
        //     require_once "../Views/pages/AgregarEditorial.php";
        //     require_once "../Views/pages/PrestamoLibros.php";
        }

        public function guardar(){

            $prestamo = new PrestamoModels();
            $prestamo->insertar($this->codigoPrestamo, $this->codigoUsuario, $this->codigoEjemplar, $this->fechaPrestamo, $this->fechaDevolucion);

            require_once "../Views/pages/PrestamoLibros.php";
            $this->index();
        }

        public function eliminar($id){
            $prestamo = new PrestamoModels();
            $r = $prestamo->delete_prestamo($id);

            require_once dirname(__DIR__)."../Views/pages/PrestamoLibros.php";
        }
         }
    
?>