<?php
    require_once(dirname(__DIR__)."../../Controllers/EjemplarController.php");

    $id = $_GET["id"];
    $delete = new EjemplarController("","","","");
    $delete->eliminar($id);

?>