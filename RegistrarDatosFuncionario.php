
<?php
session_start();
        class resistro_acom 
        {//1

            public function registro_acom ($documento, $tipo_doc, $no_documento,  $fecha_exp, $dpto_exp, $mpio_exp, $nombre, $apellido, $fecha_nacimiento, $dpto_nac, $mpio_nac, $eps_afiliado, $psco_func, $radicado, $automovil, $cantidad_p)
            {//2
                 
                $cantidad_p;

                if($automovil==""){

                    $automovil="no";
                }
                 
                 if("Cédula de ciudadanía"==$tipo_doc)
                {//a   
                    
echo $fecha= date("Y-m-d",strtotime($fecha_nacimiento. "+ 18year"));
                    
                        $fecha;
                     echo $fecha_exp; 
                   

                  if($fecha <= $fecha_exp)
                    {//b

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
                                {//d
                                    

                                    if($automovil=="si")
                                    {//e

                                        $medio_tras=$_POST["medio_tras"];
                                        $color=$_POST["color"];
                                        $modelo=$_POST["modelo"];
                                        $placa=$_POST["placa"];

                                    if($medio_tras=="" || $color=="" || $modelo=="" || $placa=="" ){

                                        echo'
                                        <script>
                                            alert("Si tiene medio de trasporte por favor llenar las casillas correspondientes."); 
                                            window.location = "DatosFuncionarioCabania.php";                            
                                        </script>
                                    
                                    ';
                                  }else{

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
    
                                                mysqli_query($db,"INSERT INTO acompaniante (id_acompaniante, documento, tipo_doc, no_documento, fecha_exp, dpto_exp, mpio_exp, pdf_doc, nombre,  apellido, fecha_nacimiento, dpto_nac, mpio_nac, eps_afiliado, psco_func, radicado, automovil) VALUES 
                                                (NULL,'$documento','$tipo_doc', '$no_documento', '$fecha_exp', '$dpto_exp', '$mpio_exp', '$imagenfinal', '$nombre', '$apellido', '$fecha_nacimiento', '$dpto_nac', '$mpio_nac', '$eps_afiliado', '$psco_func', '$radicado', '$automovil')") or die(mysqli_error($db));
                        
                                                if($psco_func=="funcionario"){

                                                    include ("conexion.php");


                                                    $medio_tras=$_POST["medio_tras"];
                                                    $color=$_POST["color"];
                                                    $modelo=$_POST["modelo"];
                                                    $placa=$_POST["placa"];

                                                    mysqli_query($db,"INSERT INTO medio_trasporte (id_tras, medio_tras, documento, modelo, placa, color, radicado) VALUES 
                                                    (NULL,'$medio_tras', '$documento', '$modelo', '$placa', '$color', '$radicado')") or die(mysqli_error($db));


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
                                                                    alert("Funcionario registrado correctamente"); 
                                                                    window.location = "ConfirmacionDatosEnvioSolicitud.php";                            
                                                                </script>
                                                            
                                                            ';

                                                        }else{

                                                           

                                                            include("conexion.php");
    
                                                            
                                                                    
                                                                    $correcto=false;

                                                                    $can="Máximo 40 invitados.";                               
                                                                    if($cantidad_p==$can){

                                                                        $correcto=true;

                                                                    }else{
                                                                        $correcto=false;
                                                                    }

                                                            if($correcto){    

                                                                echo'
                                                                    <script>
                                                                        alert("Funcionario registrado correctamente"); 
                                                                        window.location = "DatosInvitadosCabania.php";                            
                                                                    </script>
                                                            
                                                                ';
                    
                                                            }else{
                    
                                                                echo'
                                                                <script>
                                                                    alert("Funcionario registrado correctamente"); 
                                                                    window.location = "DatosAcompanianteCabania.php";                            
                                                                </script>
                                                            
                                                                ';
                                                            }  
                                                            
                                                        }  
                                                }else{

                                                    echo'
                                                        <script>
                                                            alert("¡ERROR! INTENTE MÁS TARDE"); 
                                                            window.location = "InicioDeSolicitud.php";                            
                                                        </script>
                                            
                                                    '; 
                                                }

                                        }else{

                                            echo'
                                                <script>
                                                    alert("¡ERROR! INTENTE MÁS TARDE"); 
                                                    window.location = "inicio.php";                            
                                                </script>
                                    
                                        '; }
                                    }
                                    }else{

                        
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
                                                $cantidad_p=$_SESSION["cantidad_p"];              
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
                        
                                                if($psco_func=="funcionario"){
    

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
                                                                alert("Funcionario registrado correctamente"); 
                                                                window.location = "ConfirmacionDatosEnvioSolicitud.php";                            
                                                            </script>
                                                        
                                                        ';

                                                    }else{
                                                        
                                                        
                                                        
                                                        
                                                        $correcto=false;

                                                        $can="Máximo 40 invitados."; 

                                                        if($cantidad_p==$can){

                                                            $correcto=true;

                                                        }else{
                                                            $correcto=false;
                                                        }
                                                        if($correcto){
                                                            
                                                            echo'
                                                            <script>
                                                                alert("Funcionario registrado correctamente"); 
                                                                window.location = "DatosInvitadosCabania.php";                            
                                                            </script>
                                                    
                                                            ';
                
                                                        }else{
                
                                                            echo'
                                                                <script>
                                                                    alert("Funcionario registrado correctamente"); 
                                                                    window.location = "DatosAcompanianteCabania.php";                            
                                                                </script>
                                                        
                                                            ';
                                                        }  

                                                        
                                                    }  
                                                    }    
                                        }
                                    }

                                }else{

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
                                                alert("Funcionario ya registrado"); 
                                                window.location = "ConfirmacionDatosEnvioSolicitud.php";                            
                                            </script>
                                        
                                        ';

                                    }else{

                                        
                                        
                                        
                                        $correcto=false;

                                        $can="Máximo 40 invitados.";  

                                        if($cantidad_p==$can){

                                            $correcto=true;

                                        }else{
                                            $correcto=false;
                                        }
                                        if($correcto){
                                            
                                            echo'
                                                <script>
                                                    alert("Funcionario ya registrado"); 
                                                    window.location = "DatosInvitadosCabania.php";                            
                                                </script>
                                            
                                            ';

                                        }else{

                                            echo'
                                                <script>
                                                    alert("Funcionario ya registrado"); 
                                                    window.location = "DatosAcompanianteCabania.php";                            
                                                </script>
                                            
                                            ';
                                        }  
                                }

                                }//d
                            
              
                    }else{

                        
                        echo'
                            <script>
                                alert("!ERROR¡ Fecha de expedición incorrecta "); 
                                window.location = "DatosFuncionarioCabania.php";                            
                            </script>
                        ';
                    }//b

                }else{
                     
                    
                    echo'
                        <script>
                            alert("!ERROR¡ tipo de documento incorrecto "); 
                            window.location = "DatosFuncionarioCabania.php";                            
                        </script>
                    ';
                }//a


            }//2
        }//1 
    

        $final=new resistro_acom();
        $final->registro_acom($_POST["documento"], $_POST["tipo_doc"], $_POST["no_documento"], $_POST["fecha_exp"], $_POST["dpto_exp"], $_POST["mpio_exp"], $_POST["nombre"], $_POST["apellido"],  $_POST["fecha_nacimiento"], $_POST["dpto_nac"], $_POST["mpio_nac"], $_POST["eps_afiliado"], $_POST["psco_func"], $_POST["radicado"], $_POST["automovil"], $_POST["cantidad_p"]);  

?>

