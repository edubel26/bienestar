<?php
    
    $radicado=$_POST["radicado"];
    $fk_id_rol=$_POST["EstadoSolicitud"];
    $email=$_POST["email"];

    include ("../conexion.php");

    mysqli_query($db,"UPDATE solicitud SET fk_id_Estado_Solicitud='$fk_id_rol' WHERE radicado='$radicado'");
    
    include("../conexion.php"); 

    $sql = "SELECT * FROM estados_de_la_solicitud WHERE EstadoSolicitud='$fk_id_rol'";
    if(!$result = $db->query($sql)){
    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
    }
    while($row = $result->fetch_assoc())
    {
        $id_EstadoSolicitud=stripslashes($row["id_EstadoSolicitud"]);
      
    }

include("AdminCorreoCambioEstado.php");

if($enviado){

    mysqli_query($db,"UPDATE estadodesolicitud SET fk_id_Estado_Solicitud='$id_EstadoSolicitud' WHERE radicado='$radicado'");
    header ("Location:AdminCambioEstado.php");

}
    

?>