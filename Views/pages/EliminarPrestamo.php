<?php
    require_once(dirname(__DIR__)."../../Controllers/PrestamoController.php");

    $id = $_GET["id"];
    $delete = new PrestamoController("","","","","","");
    $delete->eliminar($id);

?>