<?php 
    $conexion = new mysqli('localhost', 'root', '', 'bienestar');
    if($conexion-> connect_error){
        die('No se pudo conectar al servidor');
    }

?>