<?php
$db = mysqli_connect('localhost','root','','tortas');

if(!$db){
    echo "Error de conexion";
    exit; //previene la ejecucion de mas codigo
}

?>
