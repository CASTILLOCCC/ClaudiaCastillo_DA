<?php
class Conexion
{
    public static function Conexion(){
        $conexion = new mysqli ("localhost","root","","bibliotecaiu");
        return $conexion;
    }
}
?>