<?php
        $documento=$_POST["documento"];
        $tipo_doc=$_POST["tipo_doc"];
        $no_documento=$_POST["no_documento"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $radicado=$_POST["radicado"];     
        $id_invitados=$_POST["id_invitados"];   
        
        include ("conexion.php");
       
        
        mysqli_query($db,"UPDATE invitados SET tipo_doc='$tipo_doc' WHERE id_invitados='$id_invitados'");     
        mysqli_query($db,"UPDATE invitados SET no_documento='$no_documento' WHERE id_invitados='$id_invitados' ");
        mysqli_query($db,"UPDATE invitados SET nombre='$nombre' WHERE id_invitados='$id_invitados'");
        mysqli_query($db,"UPDATE invitados SET apellido='$apellido' WHERE id_invitados='$id_invitados'");
        


       echo'
        <script>
            alert("El invitado fue actualizado correctamente");
            window.location = "confirmacionDatosEnvioSolicitud.php";                         
        </script>
        exit;
    ';

?>
 
</form>  
</section>

    </body>
    
</html>

