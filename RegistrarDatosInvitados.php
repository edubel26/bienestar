<?php

        class resistro_acom 
        {//1

            public function registro_acom ($documento, $tipo_doc, $no_documento,$primer_nombre, $segundo_nombre, $terser_nombre, $primer_apellido, $segundo_apellido, $radicado)
            {//2

                $nombre=$primer_nombre.' '.$segundo_nombre.' '.$terser_nombre;
                $apellido=$primer_apellido.' '.$segundo_apellido;


                include ("conexion.php"); 
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

                    include ("conexion.php"); 

                    $existe="0";

                    $sql = "SELECT * FROM invitados WHERE radicado='$radicado' and no_documento='$no_documento' and documento='$documento'";
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
                        include ("conexion.php");
                
                        mysqli_query($db,"INSERT INTO invitados (id_invitados, documento, tipo_doc, no_documento, nombre, apellido, radicado) VALUES 
                        (NULL,'$documento','$tipo_doc', '$no_documento', '$nombre', '$apellido', '$radicado')") or die(mysqli_error($db));


                        include("conexion.php"); 

                        $existe="0";
                        $sql = "SELECT radicado FROM invitados WHERE documento='$documento' and radicado='$radicado'";
                        if(!$result = $db->query($sql)){
                        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                        }
                        while($row = $result->fetch_assoc())
                        {
                            $radicado=stripslashes($row["radicado"]);
                            $existe=$existe+1;
                                                    
                        }
                                                
                        if($existe==40){


                            echo'
                                <script>
                                    alert("Invitado registrado correctamente"); 
                                    window.location = "ConfirmacionDatosEnvioSolicitud.php";                            
                                </script>

                            ';

                        }else{
                            
                            echo'
                                <script>
                                    alert("Invitado registrado correctamente"); 
                                    window.location = "DatosInvitadosCabania.php";                            
                                </script>

                            ';
                        }
                        

                    }else{

                        echo'
                            <script>
                                alert("Invitado ya esta registrado "); 
                                window.location = "DatosInvitadosCabania.php";                            
                            </script>
                    
                        ';

                    }
                }else{

                
                    echo'
                        <script>
                            alert("Invitado ya esta registrado"); 
                            window.location = "DatosInvitadosCabania.php";                            
                        </script>
                
                    ';

                }

            }//2
        }//1 

        $final=new resistro_acom();
        $final->registro_acom($_POST["documento"], $_POST["tipo_doc"], $_POST["no_documento"], $_POST["primer_nombre"], $_POST["segundo_nombre"], $_POST["tercer_nombre"], $_POST["primer_apellido"], $_POST["segundo_apellido"], $_POST["radicado"]);  

?>