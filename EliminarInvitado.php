<?php
    $radicado=$_POST["radicado"];
    $no_documento=$_POST["no_documento"];


include ("conexion.php");

mysqli_query($db,"DELETE FROM invitados WHERE radicado='$radicado' and no_documento='$no_documento'");


        echo'
            <script>
                alert("invitado fue eliminada");
                window.location="ConfirmacionDatosEnvioSolicitud.php";                         
            </script>
            exit;
        ';
?>  


