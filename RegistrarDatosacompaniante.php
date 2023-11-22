
<?php
session_start();
        class resistro_acom {

            public function registro_acom ($documento, $tipo_doc, $no_documento, $fecha_exp, $dpto_exp, $mpio_exp, $primer_nombre, $segundo_nombre, $terser_nombre, $primer_apellido, $segundo_apellido, $fecha_nacimiento, $dpto_nac, $mpio_nac, $eps_afiliado, $psco_func, $radicado){

                $nombre=$primer_nombre.' '.$segundo_nombre.' '.$terser_nombre;
                $apellido=$primer_apellido.' '.$segundo_apellido;
                

                //para ver las veces de los formurarios
               // $sql = "SELECT  SELECT COUNT(radicado) FROM acompanantes WHERE radicado='$radicado';"
                  
               if("Tarjeta de identidad"== $tipo_doc)
                {

                      $fecha= date("Y-m-d",strtotime($fecha_nacimiento. "+ 18year"));
                      $fecha2= date("Y-m-d",strtotime($fecha_nacimiento. "+ 7year"));
                        
                        $fecha;
                        $fecha2;
                        $fecha_exp;

                    if($fecha > $fecha_exp || $fecha2 < $fecha_exp )
                    {
                        include("conexion.php"); 

                        $existe="0";
        
                        $sql = "SELECT * FROM acompaniante WHERE radicado='$radicado' and no_documento='$no_documento' and documento='$documento'";
                        if(!$result = $db->query($sql)){
                            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                            }
                            while($row = $result->fetch_assoc())
                            {
                                $radicado=stripslashes($row["radicado"]);
                                $documento=stripslashes($row["documento"]);
                                $existe=$existe+1;  
                            }
                        
                            if ($existe=="0")
                             {                
                                include ('GuardarPdf.php');
                         
        
                                $imagen = $_FILES['pdf_doc']['name'];
                                $tipo_archivo = $_FILES['pdf_doc']['type'];
        
        
                                $tamano_archivo = $_FILES['pdf_doc']['size'];
                                //  $nomimag=$clave.'.png';
                            
                                //13:23:45
                                
                                //$imagenfinal=$imagen;
                                //echo "$imagenfinal";
        
                                //$nombreCliente   = $_REQUEST['nombreCliente'];
        
        
                                $newNameFoto    = $nombre.$no_documento;
        
                                $explode        = explode('.', $imagen);
                                $extension_foto = array_pop($explode);
                                $nuevoNameFoto  = $newNameFoto.'.'.$extension_foto;
        
        
                                $num=date("GHs");
                                $imagenfinal=$nuevoNameFoto;
                                include ("conexion.php"); 
                                
                                //$nombrearch=$imagenfinal;
                                if(move_uploaded_file($_FILES['pdf_doc']['tmp_name'],$destino.'/'.$imagenfinal))
                                {
                                    
        
                                //guardar el contenido de lops select
        
                                include("conexion.php"); 
                                $sql = "SELECT * FROM municipio WHERE id_municipio='$mpio_exp'";
                                if(!$result = $db->query($sql)){
                                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                }
                                while($row = $result->fetch_assoc())
                                {
                                    $mpio_exp=stripslashes($row["municipio"]);
                                  
                                }
        
                                
        
                                include("conexion.php"); 
                                
                                $sql = "SELECT * FROM departamentos WHERE id_depa='$dpto_exp'";
                                if(!$result = $db->query($sql)){
                                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                }
                                while($row = $result->fetch_assoc())
                                {
                                    $dpto_exp=stripslashes($row["departamentos"]);
                                  
                                }
        
        
                                include("conexion.php"); 
                                
                                $sql = "SELECT * FROM departamentos WHERE id_depa='$dpto_nac'";
                                if(!$result = $db->query($sql)){
                                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                }
                                while($row = $result->fetch_assoc())
                                {
                                    $dpto_nac=stripslashes($row["departamentos"]);
                                }
        
                                include("conexion.php"); 
        
                                $sql = "SELECT * FROM municipio WHERE id_municipio='$mpio_nac'";
                                if(!$result = $db->query($sql)){
                                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                }
                                while($row = $result->fetch_assoc())
                                {
                                    $mpio_nac=stripslashes($row["municipio"]);
                                }
        
    
        
        
                                    include ("conexion.php");
        
                                    mysqli_query($db,"INSERT INTO acompaniante (id_acompaniante, documento, tipo_doc, no_documento, fecha_exp, dpto_exp, mpio_exp, pdf_doc, nombre, apellido, fecha_nacimiento, dpto_nac, mpio_nac, eps_afiliado, psco_func, radicado) VALUES 
                                    (NULL,'$documento','$tipo_doc', '$no_documento', '$fecha_exp', '$dpto_exp', '$mpio_exp', '$imagenfinal', '$nombre', '$apellido', '$fecha_nacimiento', '$dpto_nac', '$mpio_nac', '$eps_afiliado', '$psco_func', '$radicado')") or die(mysqli_error($db));
            
                                        $cantidad_p=$_SESSION["cantidad_p"];

                                            include("conexion.php"); 

                                            $existe="0";
                                            $sql = "SELECT radicado FROM acompaniante WHERE documento='$documento' and radicado='$radicado'";
                                            if(!$result = $db->query($sql)){
                                            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                            }
                                            while($row = $result->fetch_assoc())
                                            {
                                                $radicado=stripslashes($row["radicado"]);
                                                $existe=$existe+1;
                                                
                                            }
                                            
                                            if($existe==$cantidad_p){


                                                echo'
                                                    <script>
                                                        alert("Acompañante registrado correctamente"); 
                                                        window.location = "ConfirmacionDatosEnvioSolicitud.php";                            
                                                    </script>
                                                
                                                ';

                                            }else{

                                                echo'
                                                    <script>
                                                        alert("Acompañante registrado correctamente"); 
                                                        window.location = "DatosAcompanianteCabania.php";                            
                                                    </script>
                                                
                                                ';
                                            }  
                                                        
        
                                }else{
        
                                    echo'
                                        <script>
                                            alert("¡ERROR! Intente más tarde"); 
                                            window.location = "inicio.php";                            
                                        </script>
                            
                                    '; 
                                }
                            }
                            if($existe!=="0"){
           
                                include("conexion.php"); 
                                                                                        
                                $cantidad_p=$_SESSION["cantidad_p"];

                                            include("conexion.php"); 

                                            $existe="0";
                                            $sql = "SELECT radicado FROM acompaniante WHERE documento='$documento' and radicado='$radicado'";
                                            if(!$result = $db->query($sql)){
                                            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                            }
                                            while($row = $result->fetch_assoc())
                                            {
                                                $radicado=stripslashes($row["radicado"]);
                                                $existe=$existe+1;
                                                
                                            }
                                            
                                            if($existe==$cantidad_p){


                                                echo'
                                                    <script>
                                                        alert("ACOMPAÑANTE YA REGISTRADO"); 
                                                        window.location = "ConfirmacionDatosEnvioSolicitud.php";                            
                                                    </script>
                                                
                                                ';

                                            }else{

                                                echo'
                                                    <script>
                                                        alert("ACOMPAÑANTE YA REGISTRADO"); 
                                                        window.location = "DatosAcompanianteCabania.php";                            
                                                    </script>
                                                
                                                ';
                                            } 
                            } 


                    }else{
                        
                        echo'
                            <script>
                                alert("¡ERROR! Fecha de expedición incorrecta"); 
                                window.location = "DatosAcompanianteCabania.php";                            
                            </script>

                        ';
                    }
                }elseif("NIUP - Registro Civil de nacimiento"==$tipo_doc){

                    $fecha1= date("Y-m-d",strtotime($fecha_nacimiento. "+ 7year"));

                    $fecha1;
                    $fecha_exp;

                        if($fecha1 > $fecha_exp)
                        {
                            include("conexion.php"); 

                            $existe="0";
            
                            $sql = "SELECT * FROM acompaniante WHERE radicado='$radicado' and no_documento='$no_documento' and documento='$documento'";
                            if(!$result = $db->query($sql)){
                                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                }
                                while($row = $result->fetch_assoc())
                                {
                                    $radicado=stripslashes($row["radicado"]);
                                    $documento=stripslashes($row["documento"]);
                                    $existe=$existe+1;  
                                }
                            
                                if ($existe=="0")
                                 {                
                                    include ('GuardarPdf.php');
                             
            
                                    $imagen = $_FILES['pdf_doc']['name'];
                                    $tipo_archivo = $_FILES['pdf_doc']['type'];
            
            
                                    $tamano_archivo = $_FILES['pdf_doc']['size'];
                                    //  $nomimag=$clave.'.png';
                                
                                    //13:23:45
                                    
                                    //$imagenfinal=$imagen;
                                    //echo "$imagenfinal";
            
                                    //$nombreCliente   = $_REQUEST['nombreCliente'];
            
            
                                    $newNameFoto    = $nombre.$no_documento;
            
                                    $explode        = explode('.', $imagen);
                                    $extension_foto = array_pop($explode);
                                    $nuevoNameFoto  = $newNameFoto.'.'.$extension_foto;
            
            
                                    $num=date("GHs");
                                    $imagenfinal=$nuevoNameFoto;
                                    include ("conexion.php"); 
                                    
                                    //$nombrearch=$imagenfinal;
                                    if(move_uploaded_file($_FILES['pdf_doc']['tmp_name'],$destino.'/'.$imagenfinal))
                                    {
                                        
            
                                    //guardar el contenido de lops select
            
                                    include("conexion.php"); 
                                    $sql = "SELECT * FROM municipio WHERE id_municipio='$mpio_exp'";
                                    if(!$result = $db->query($sql)){
                                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                    }
                                    while($row = $result->fetch_assoc())
                                    {
                                        $mpio_exp=stripslashes($row["municipio"]);
                                      
                                    }
            
                                    
            
                                    include("conexion.php"); 
                                    
                                    $sql = "SELECT * FROM departamentos WHERE id_depa='$dpto_exp'";
                                    if(!$result = $db->query($sql)){
                                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                    }
                                    while($row = $result->fetch_assoc())
                                    {
                                        $dpto_exp=stripslashes($row["departamentos"]);
                                      
                                    }
            
            
                                    include("conexion.php"); 
                                    
                                    $sql = "SELECT * FROM departamentos WHERE id_depa='$dpto_nac'";
                                    if(!$result = $db->query($sql)){
                                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                    }
                                    while($row = $result->fetch_assoc())
                                    {
                                        $dpto_nac=stripslashes($row["departamentos"]);
                                    }
            
                                    include("conexion.php"); 
            
                                    $sql = "SELECT * FROM municipio WHERE id_municipio='$mpio_nac'";
                                    if(!$result = $db->query($sql)){
                                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                    }
                                    while($row = $result->fetch_assoc())
                                    {
                                        $mpio_nac=stripslashes($row["municipio"]);
                                    }
            
        
                                        include ("conexion.php");
            
                                        mysqli_query($db,"INSERT INTO acompaniante (id_acompaniante, documento, tipo_doc, no_documento, fecha_exp, dpto_exp, mpio_exp, pdf_doc, nombre, apellido, fecha_nacimiento, dpto_nac, mpio_nac, eps_afiliado, psco_func, radicado) VALUES 
                                        (NULL,'$documento','$tipo_doc', '$no_documento', '$fecha_exp', '$dpto_exp', '$mpio_exp', '$imagenfinal', '$nombre', '$apellido', '$fecha_nacimiento', '$dpto_nac', '$mpio_nac', '$eps_afiliado', '$psco_func', '$radicado')") or die(mysqli_error($db));
                
                                        $cantidad_p=$_SESSION["cantidad_p"];

                                        include("conexion.php"); 

                                        $existe="0";
                                        $sql = "SELECT radicado FROM acompaniante WHERE documento='$documento' and radicado='$radicado'";
                                        if(!$result = $db->query($sql)){
                                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                        }
                                        while($row = $result->fetch_assoc())
                                        {
                                            $radicado=stripslashes($row["radicado"]);
                                            $existe=$existe+1;
                                            
                                        }
                                        
                                        if($existe==$cantidad_p){


                                            echo'
                                                <script>
                                                    alert("Acompañante registrado correctamente"); 
                                                    window.location = "ConfirmacionDatosEnvioSolicitud.php";                            
                                                </script>
                                            
                                            ';

                                        }else{

                                            echo'
                                                <script>
                                                    alert("Acompañante registrado correctamente"); 
                                                    window.location = "DatosAcompanianteCabania.php";                            
                                                </script>
                                            
                                            ';
                                        }  
                                                    
            
                                    }else{
            
                                        echo'
                                            <script>
                                                alert("¡ERROR! Intente más tarde"); 
                                                window.location = "inicio.php";                            
                                            </script>
                                
                                        '; 
                                    }
                                }
                                if($existe!=="0"){
               
                                    $cantidad_p=$_SESSION["cantidad_p"];

                                    include("conexion.php"); 

                                    $existe="0";
                                    $sql = "SELECT radicado FROM acompaniante WHERE documento='$documento' and radicado='$radicado'";
                                    if(!$result = $db->query($sql)){
                                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                    }
                                    while($row = $result->fetch_assoc())
                                    {
                                        $radicado=stripslashes($row["radicado"]);
                                        $existe=$existe+1;
                                        
                                    }
                                    
                                    if($existe==$cantidad_p){


                                        echo'
                                            <script>
                                                alert("ACOMPAÑANTE YA REGISTRADO"); 
                                                window.location = "ConfirmacionDatosEnvioSolicitud.php";                            
                                            </script>
                                        
                                        ';

                                    }else{

                                        echo'
                                            <script>
                                                alert("ACOMPAÑANTE YA REGISTRADO"); 
                                                window.location = "DatosAcompanianteCabania.php";                            
                                            </script>
                                        
                                        ';
                                    } 
                                }



                        }else{
                           
                            echo'
                                <script>
                                    alert("¡ERROR! Fecha de expedición incorrecta"); 
                                    window.location = "DatosAcompanianteCabania.php";                            
                                </script>

                            ';
                        } 
                }else{

                $fecha3= date("Y-m-d",strtotime($fecha_nacimiento. "+ 18year"));

                    $fecha3;
                    $fecha_exp;

                        if($fecha3 <= $fecha_exp)
                        {
                                
                            include("conexion.php"); 

                            $existe="0";
            
                            $sql = "SELECT * FROM acompaniante WHERE radicado='$radicado' and no_documento='$no_documento' and documento='$documento'";
                            if(!$result = $db->query($sql)){
                                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                }
                                while($row = $result->fetch_assoc())
                                {
                                    $radicado=stripslashes($row["radicado"]);
                                    $documento=stripslashes($row["documento"]);
                                    $existe=$existe+1;  
                                }
                            
                                if ($existe=="0")
                                 {                
                                    include ('GuardarPdf.php');
                             
            
                                    $imagen = $_FILES['pdf_doc']['name'];
                                    $tipo_archivo = $_FILES['pdf_doc']['type'];
            
            
                                    $tamano_archivo = $_FILES['pdf_doc']['size'];
                                    //  $nomimag=$clave.'.png';
                                
                                    //13:23:45
                                    
                                    //$imagenfinal=$imagen;
                                    //echo "$imagenfinal";
            
                                    //$nombreCliente   = $_REQUEST['nombreCliente'];
            
            
                                    $newNameFoto    = $nombre.$no_documento;
            
                                    $explode        = explode('.', $imagen);
                                    $extension_foto = array_pop($explode);
                                    $nuevoNameFoto  = $newNameFoto.'.'.$extension_foto;
            
            
                                    $num=date("GHs");
                                    $imagenfinal=$nuevoNameFoto;
                                    include ("conexion.php"); 
                                    
                                    //$nombrearch=$imagenfinal;
                                    if(move_uploaded_file($_FILES['pdf_doc']['tmp_name'],$destino.'/'.$imagenfinal))
                                    {
                                        
            
                                    //guardar el contenido de lops select
            
                                    include("conexion.php"); 
                                    $sql = "SELECT * FROM municipio WHERE id_municipio='$mpio_exp'";
                                    if(!$result = $db->query($sql)){
                                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                    }
                                    while($row = $result->fetch_assoc())
                                    {
                                        $mpio_exp=stripslashes($row["municipio"]);
                                      
                                    }
            

                                    include("conexion.php"); 
                                    
                                    $sql = "SELECT * FROM departamentos WHERE id_depa='$dpto_exp'";
                                    if(!$result = $db->query($sql)){
                                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                    }
                                    while($row = $result->fetch_assoc())
                                    {
                                        $dpto_exp=stripslashes($row["departamentos"]);
                                      
                                    }
            
            
                                    include("conexion.php"); 
                                    
                                    $sql = "SELECT * FROM departamentos WHERE id_depa='$dpto_nac'";
                                    if(!$result = $db->query($sql)){
                                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                    }
                                    while($row = $result->fetch_assoc())
                                    {
                                        $dpto_nac=stripslashes($row["departamentos"]);
                                    }
            
                                    include("conexion.php"); 
            
                                    $sql = "SELECT * FROM municipio WHERE id_municipio='$mpio_nac'";
                                    if(!$result = $db->query($sql)){
                                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                    }
                                    while($row = $result->fetch_assoc())
                                    {
                                        $mpio_nac=stripslashes($row["municipio"]);
                                    }
            
                                        include ("conexion.php");
            
                                        mysqli_query($db,"INSERT INTO acompaniante (id_acompaniante, documento, tipo_doc, no_documento, fecha_exp, dpto_exp, mpio_exp, pdf_doc, nombre, apellido, fecha_nacimiento, dpto_nac, mpio_nac, eps_afiliado, psco_func, radicado) VALUES 
                                        (NULL,'$documento','$tipo_doc', '$no_documento', '$fecha_exp', '$dpto_exp', '$mpio_exp', '$imagenfinal', '$nombre', '$apellido', '$fecha_nacimiento', '$dpto_nac', '$mpio_nac', '$eps_afiliado', '$psco_func', '$radicado')") or die(mysqli_error($db));
                
                                        $cantidad_p=$_SESSION["cantidad_p"];

                                        include("conexion.php"); 

                                        $existe="0";
                                        $sql = "SELECT radicado FROM acompaniante WHERE documento='$documento' and radicado='$radicado'";
                                        if(!$result = $db->query($sql)){
                                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                        }
                                        while($row = $result->fetch_assoc())
                                        {
                                            $radicado=stripslashes($row["radicado"]);
                                            $existe=$existe+1;
                                            
                                        }
                                        
                                        if($existe==$cantidad_p){


                                            echo'
                                                <script>
                                                    alert("Acompañante registrado correctamente"); 
                                                    window.location = "ConfirmacionDatosEnvioSolicitud.php";                            
                                                </script>
                                            
                                            ';

                                        }else{

                                            echo'
                                                <script>
                                                    alert("Acompañante registrado correctamente"); 
                                                    window.location = "DatosAcompanianteCabania.php";                            
                                                </script>
                                            
                                            ';
                                        }  
                                                    
            
                                    }else{
            
                                        echo'
                                            <script>
                                                alert("¡ERROR! Intente más tarde"); 
                                                window.location = "inicio.php";                            
                                            </script>
                                
                                        '; 
                                    }
                                }
                                if($existe!=="0"){
               
                                    $cantidad_p=$_SESSION["cantidad_p"];

                                    include("conexion.php"); 

                                    $existe="0";
                                    $sql = "SELECT radicado FROM acompaniante WHERE documento='$documento' and radicado='$radicado'";
                                    if(!$result = $db->query($sql)){
                                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                                    }
                                    while($row = $result->fetch_assoc())
                                    {
                                        $radicado=stripslashes($row["radicado"]);
                                        $existe=$existe+1;
                                        
                                    }
                                    
                                    if($existe==$cantidad_p){


                                        echo'
                                            <script>
                                                alert("ACOMPAÑANTE YA REGISTRADO"); 
                                                window.location = "ConfirmacionDatosEnvioSolicitud.php";                            
                                            </script>
                                        
                                        ';

                                    }else{

                                        echo'
                                            <script>
                                                alert("ACOMPAÑANTE YA REGISTRADO"); 
                                                window.location = "DatosAcompanianteCabania.php";                            
                                            </script>
                                        
                                        ';
                                    } 
                                }


                        }else{
                            
                         echo'
                                <script>
                                    alert("¡ERROR! Fecha de expedición incorrecta"); 
                                    window.location = "DatosAcompanianteCabania.php";                            
                                </script>

                            ';
                        }
                }

                     
                }
            }  

        $final=new resistro_acom();
        $final->registro_acom($_POST["documento"], $_POST["tipo_doc"], $_POST["no_documento"], $_POST["fecha_exp"], $_POST["dpto_exp"], $_POST["mpio_exp"], $_POST["primer_nombre"], $_POST["segundo_nombre"], $_POST["tercer_nombre"], $_POST["primer_apellido"], $_POST["segundo_apellido"], $_POST["fecha_nacimiento"], $_POST["dpto_nac"], $_POST["mpio_nac"], $_POST["eps_afiliado"], $_POST["psco_func"],$_POST["radicado"]);  

?>

