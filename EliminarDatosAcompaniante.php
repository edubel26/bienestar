<?php 
    include("conexion.php");

    $psco_func=$_POST["psco_func"];

    if($psco_func=="funcionario"){

        $no_documento=$_POST["no_documento"];
        $radicado=$_POST["radicado"];
        
            
          mysqli_query($db,"DELETE FROM acompaniante WHERE radicado='$radicado'");
          mysqli_query($db,"DELETE FROM solicitud WHERE radicado='$radicado'");
          mysqli_query($db,"DELETE FROM estadodesolicitud WHERE radicado='$radicado'");
          mysqli_query($db,"DELETE FROM medio_trasporte WHERE radicado='$radicado'");
          mysqli_query($db,"DELETE FROM estadodesolicitud WHERE radicado='$radicado'");
          mysqli_query($db,"DELETE FROM invitados WHERE radicado='$radicado'");
          
            echo"
                <script>
                    alert('Funcionario eliminado'); 
                    window.location = 'InicioDeSolicitud.php';                     
                </script>
            "; 

    }else{
    $no_documento=$_POST["no_documento"];
    $radicado=$_POST["radicado"];
    
        mysqli_query($db,"DELETE FROM acompaniante WHERE no_documento='$no_documento' ");
        echo"
        <script>
            alert('Acompañante eliminado'); 
            window.location = 'ConfirmacionDatosEnvioSolicitud.php';                     
        </script>
        
        ";
     }
?>