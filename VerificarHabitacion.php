<?php
    class loginn {
            
        public function entradaa ( $nombre, $documento, $uso,  $destino, $cantidad_p, $f_ini, $f_fin, $dias_total, $habitacion, $radicado )
        {
            

            include("conexion.php");

            $sql="SELECT * FROM disponibilidadhabitacion WHERE (f_ini  BETWEEN '$f_ini' and '$f_fin' and habitacionn='$habitacion') or
            (f_fin  BETWEEN '$f_ini' and '$f_fin' and habitacionn='$habitacion') or
            (f_ini <= '$f_ini' and f_fin >= '$f_fin' and habitacionn='$habitacion')";
            if(!$result = $db->query($sql)){
            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
            }
            while($row = $result->fetch_assoc())
            {
                $habitacionn=stripslashes($row["habitacionn"]);

                    
                   if($habitacion==$habitacionn){

                        
                        echo"
                            <script>
                                alert('LA HABITACION SE ENCUENTRA OCUPADA'); 
                                window.location='ReelegirHabitacion.php?nombre=$nombre&documento=$documento&uso=$uso&destino=$destino&cantidad_p=$cantidad_p&f_ini=$f_ini&f_fin=$f_fin&dias_total=$dias_total&habitacion=$habitacion&radicado=$radicado';                     
                            </script>
                        
                        "; 

                    }else{
                        
         
                       echo"
                        <script>
                            window.location='evaluar_solicitud.php?nombre=$nombre&documento=$documento&uso=$uso&destino=$destino&cantidad_p=$cantidad_p&f_ini=$f_ini&f_fin=$f_fin&dias_total=$dias_total&habitacion=$habitacion&radicado=$radicado';                     
                        </script>
                        
                        ";


                    }

                    

            }
                    echo"

                        <script>
                            window.location='evaluar_solicitud.php?nombre=$nombre&documento=$documento&uso=$uso&destino=$destino&cantidad_p=$cantidad_p&f_ini=$f_ini&f_fin=$f_fin&dias_total=$dias_total&habitacion=$habitacion&radicado=$radicado';                     
                        </script>
                    
                    ";

 
        }//Clase
    }
    $final=new loginn();
    $final->entradaa($_POST["nombre"], $_POST["documento"], $_POST["uso"], $_POST["destino"], $_POST["cantidad_p"], $_POST["f_ini"], $_POST["f_fin"], $_POST["dias_total"], $_POST["habitacion"], $_POST["radicado"]);

     
         
?>
