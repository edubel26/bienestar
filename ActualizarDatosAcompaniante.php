<?php

        include("GuardarPdf.php");
        
        $documento=$_POST["documento"];
        $tipo_doc=$_POST["tipo_doc"];
        $no_documento=$_POST["no_documento"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $radicado=$_POST["radicado"];     
        $id_acompaniante=$_POST["id_acompaniante"];   
        
        include ("conexion.php");
       
        
        mysqli_query($db,"UPDATE acompaniante SET tipo_doc = '$tipo_doc' WHERE id_acompaniante='$id_acompaniante'");     
        mysqli_query($db,"UPDATE acompaniante SET no_documento='$no_documento' WHERE id_acompaniante='$id_acompaniante' ");
        mysqli_query($db,"UPDATE acompaniante SET nombre = '$nombre' WHERE id_acompaniante='$id_acompaniante'");
        mysqli_query($db,"UPDATE acompaniante SET apellido = '$apellido' WHERE id_acompaniante='$id_acompaniante'");
        


       echo'
        <script>
            alert("El acompañante fue actualizado correctamente");
            window.location = "confirmacionDatosEnvioSolicitud.php";                         
        </script>
        exit;
    ';

        
           
           

?>
 
</form>  
</section>

    </body>
    
</html>

