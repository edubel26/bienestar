<?php

    $radicado=$_GET["radicado"];
    $documento=$_GET["documento"];

    include ("conexion.php");

    mysqli_query($db,"DELETE FROM solicitud WHERE radicado='$radicado'");
    mysqli_query($db,"DELETE FROM acompaniante WHERE radicado='$radicadoo' ");
    mysqli_query($db,"DELETE FROM disponibilidadhabitacion WHERE radicado='$radicadoo' ");
    mysqli_query($db,"DELETE FROM medio_trasporte WHERE radicado='$radicadoo' ");
    
    echo'
        <script>
            alert("Solicitud fue eliminada");
            window.location="MiPerfil.php";                         
        </script>
        exit;
    ';
?>  


