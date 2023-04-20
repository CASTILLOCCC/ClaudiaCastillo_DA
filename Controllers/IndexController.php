<?php
require_once("AutorController.php");
require_once("EditorialController.php");
require_once("LibroController.php");
require_once("UsuarioController.php");
require_once("EjemplarController.php");

    $opcion = $_POST['controller'];
    if($opcion == "autor"){
        $objeto = new AutorController($_POST['CodigoAutor'], $_POST['NombreAutor'], $_POST['guardar']);
    }
    if($opcion == "updateautor"){
        $objeto = new AutorController($_POST['CodigoAutor'], $_POST['NombreAutor'], 'Actualizar');
    }
    else if($opcion == "editorial"){
        
        $objeto = new EditorialController($_POST['CodigoEditorial'], $_POST['NombreEditorial'], $_POST['guardar']);
    }
    else if($opcion == "updateeditorial"){
        
        $objeto = new EditorialController($_POST['CodigoEditorial'], $_POST['NombreEditorial'], 'Actualizar');
    }
    else if($opcion == "libro"){
        
        $objeto = new LibroController($_POST['codigoLibro'], $_POST['titulo'], $_POST['isbn'], $_POST['codigoEditorial'], $_POST['paginas'], $_POST['codigoAutor'], $_POST['guardar']);
    }
    else if($opcion == "updatelibro"){
        
        $objeto = new LibroController($_POST['codigoLibro'], $_POST['titulo'], $_POST['isbn'], $_POST['codigoEditorial'], $_POST['paginas'], $_POST['codigoAutor'], 'Actualizar');
    }
    else if($opcion == "usuario"){
        
        $objeto = new UsuarioController($_POST['codigoUsuario'], $_POST['nombreUsuario'], $_POST['telefonoUsuario'], $_POST['direccionUsuario'], $_POST['guardar']);
    }
    else if($opcion == "ejemplar"){
        
        $objeto = new EjemplarController($_POST['codigoEjemplar'], $_POST['localizacion'], $_POST['codigoLibro'], $_POST['guardar']);
    }
    else if($opcion == "updateejemplar"){
        
        $objeto = new EjemplarController($_POST['codigoEjemplar'], $_POST['localizacion'], $_POST['codigoLibro'], 'Actualizar');
    }
    else if($opcion == "updateUsuario"){
        
        $objeto = new UsuarioController($_POST['codigoUsuario'], $_POST['nombreUsuario'], $_POST['telefonoUsuario'], $_POST['direccionUsuario'], 'Actualizar');
    }
    else if($opcion == "updatePrestamos"){
        
        $objeto = new PrestamoController($_POST['codigoPrestamo'], $_POST['codigoUsuario'], $_POST['codigoEjemplar'], $_POST['fechaPrestamo'], $_POST['fechaDevolucion'], 'guardar');
    }
?>