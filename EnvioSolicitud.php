<?php
session_start();

include ("conexion.php");

$documento=$_POST["documento"];
$radicado=$_POST["radicado"];
$emaill=$_POST["emaill"];


$existe="0";

$sql = "SELECT nombre, apellido FROM usuario WHERE documento='$documento'";  
if(!$result = $db->query($sql)){
die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}while($row = $result->fetch_assoc())
{
    $nombre=stripslashes($row["nombre"]);
    $apellido=stripslashes($row["apellido"]);
}


$existe="0";

$sql = "SELECT * FROM solicitud WHERE radicado='$radicado'";  
if(!$result = $db->query($sql)){
die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}while($row = $result->fetch_assoc())
{
    $radicado=stripslashes($row["radicado"]);
    $existe=$existe+1;
}

if($existe=="0"){
    
$EstadoSolicitud=$_SESSION["EstadoSolicitud"];
$documento=$_SESSION["documento"]; 
$uso=$_SESSION["uso"];  
$destino=$_SESSION["destino"]; 
$cantidad_p=$_SESSION["cantidad_p"]; 
$f_ini=$_SESSION["f_ini"]; 
$f_fin=$_SESSION["f_fin"]; 
$dias_total=$_SESSION["dias_total"]; 
$habitacion=$_SESSION["habitacion"]; 

$fk_id_Estado_Solicitud="3";

mysqli_query($db,"INSERT INTO disponibilidadhabitacion (id_disponibilidad, habitacionn, f_ini, f_fin, documento, radicado) VALUES 
(NULL, '$habitacion', '$f_ini', '$f_fin', '$documento', '$radicado')") or die(mysqli_error($db));

mysqli_query($db,"INSERT INTO estadodesolicitud (id_Estado, radicado, fk_id_Estado_Solicitud) VALUES 
(NULL,'$radicado', '$fk_id_Estado_Solicitud')") or die(mysqli_error($db));

mysqli_query($db,"INSERT INTO solicitud (id_solicitud, nombre, documento, uso,  destino, cantidad_p, f_ini, f_fin, dias_total, habitacion, radicado, fk_id_Estado_Solicitud) VALUES 
(NULL, '$nombre', '$documento', '$uso', '$destino', '$cantidad_p', '$f_ini', '$f_fin', '$dias_total', '$habitacion', '$radicado', '$EstadoSolicitud')") or die(mysqli_error($db));


}else{

   echo' 
    <script>
        alert("La solicitud ya fue enviada."); 
        window.location = "MiPerfil.php";                            
    </script>
    
';  
}

include("emailSolicitud.php");

if($enviado){

       echo' 
        <script>
            alert("Esperar confirmación vía E-mail o en el apartado (MI PERFIL)."); 
            window.location = "MiPerfil.php";                            
        </script>
        
    ';  
}
?>