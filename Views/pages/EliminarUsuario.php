<?php
    require_once(dirname(__DIR__)."../../Controllers/UsuarioController.php");

    $id = $_GET["id"];
    $delete = new UsuarioController("","","","","");
    $delete->eliminar($id);

?>