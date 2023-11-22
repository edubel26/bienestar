<?php
       session_start(); 
    class loginn {
            
        public function entradaa ( $nombre, $documento, $uso,  $destino, $cantidad_p, $f_ini, $f_fin, $dias_total, $habitacion, $radicado ){
              
            if($nombre=="" || $documento=="" || $uso==""  || $destino=="" ||  $cantidad_p=="" || $f_ini=="" || $f_fin=="" || $dias_total=="" || $habitacion=="" || $radicado=="" ){

                   
                    echo"
                        <script>
                            alert('¡Error! No se encuentra la solicitud.'); 
                            window.location = 'InicioDeSolicitud.php';                     
                        </script>
                    "; 
            }else{
                   
               
               
                include("conexion.php"); 

                $cont="0";
                $sql="SELECT * FROM solicitud WHERE radicado='$radicado'";
                if(!$result = $db->query($sql)){
                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                }
                while($row = $result->fetch_assoc())
                {
                    $radicado=stripslashes($row["radicado"]);
                    
                    $cont=$cont+1;			
                }
                    
                          
                    //}//*d
                    if ($cont=="0"){
                                                

                        include("conexion.php"); 
                        $fk_id_Estado_Solicitud=3;

                        $sql = "SELECT * FROM estados_de_la_solicitud WHERE id_EstadoSolicitud ='$fk_id_Estado_Solicitud'";
                        if(!$result = $db->query($sql)){
                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                        }
                        while($row = $result->fetch_assoc())
                        {
                            $EstadoSolicitud=stripslashes($row["EstadoSolicitud"]);
                                                        
                        }
                     
                        
                        $_SESSION["EstadoSolicitud"]=$EstadoSolicitud;
                        $_SESSION["nombre"]=$nombre;
                        $_SESSION["documento"]=$documento; 
                        $_SESSION["uso"]=$uso;  
                        $_SESSION["destino"]=$destino; 
                        $_SESSION["cantidad_p"]=$cantidad_p; 
                        $_SESSION["f_ini"]=$f_ini; 
                        $_SESSION["f_fin"]=$f_fin; 
                        $_SESSION["dias_total"]=$dias_total; 
                        $_SESSION["habitacion"]=$habitacion; 
                        $_SESSION["radicado"]=$radicado;

                        header('Location:DatosFuncionarioCabania.php');
                    }else{
                        
                        echo"
                            <script>
                                alert('¡Error! Suceso no identificado intentar más tarde.'); 
                                window.location ='InicioDeSolicitud.php';                     
                            </script>
                    
                        "; 
                    }                     
                                                    
            }          
        }//Clase
    }
    $final=new loginn();
    $final->entradaa($_GET["nombre"], $_GET["documento"], $_GET["uso"], $_GET["destino"], $_GET["cantidad_p"], $_GET["f_ini"], $_GET["f_fin"], $_GET["dias_total"], $_GET["habitacion"], $_GET["radicado"]);
?>
