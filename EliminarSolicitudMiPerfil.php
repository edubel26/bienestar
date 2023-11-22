<?php
$radicado=$_POST["radicado"];


include ("conexion.php");

mysqli_query($db,"DELETE FROM solicitud WHERE radicado='$radicado'");
mysqli_query($db,"DELETE FROM acompaniante WHERE radicado='$radicado'");
mysqli_query($db,"DELETE FROM disponibilidadhabitacion WHERE radicado='$radicado'");
mysqli_query($db,"DELETE FROM medio_trasporte WHERE radicado='$radicado'");
mysqli_query($db,"DELETE FROM invitados WHERE radicado='$radicado'");

        echo'
            <script>
                alert("Solicitud fue eliminada");
                window.location="MiPerfil.php";                         
            </script>
            exit;
        ';
?>  


