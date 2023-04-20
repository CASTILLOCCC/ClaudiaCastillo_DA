<?php
class Conexion
{
    public static function Conexion(){
        $conexion = new mysqli ("containers-us-west-75.railway.app","root","vk5gLrcvbRDaBsCKknL6","railway","6697");
        return $conexion;
    }
}
?>